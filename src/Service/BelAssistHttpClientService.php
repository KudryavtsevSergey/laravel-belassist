<?php

declare(strict_types=1);

namespace Sun\BelAssist\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use Sun\BelAssist\BelAssistConfig;
use Sun\BelAssist\Dto\RequestDto\RequestDtoInterface;
use Sun\BelAssist\Dto\ResponseDto\ResponseDtoInterface;
use Sun\BelAssist\Enum\ResponseFormatEnum;
use Sun\BelAssist\Exceptions\InternalError;
use Sun\BelAssist\Mapper\ArrayObjectMapper;

class BelAssistHttpClientService
{
    private const REQUEST_METHOD = 'POST';

    private Client $client;

    public function __construct(
        private ArrayObjectMapper $arrayObjectMapper,
        private BelAssistConfig $config
    ) {
        $this->client = new Client([
            'base_uri' => $config->getGateway(),
        ]);
    }

    /**
     * @template T of ResponseDtoInterface
     * @param string $method
     * @param RequestDtoInterface $requestDto
     * @param class-string<T> $responseType
     * @return T
     */
    public function request(string $method, RequestDtoInterface $requestDto, string $responseType): ResponseDtoInterface
    {
        $response = $this->rawRequest($method, array_merge($this->arrayObjectMapper->serialize($requestDto), [
            'Login' => $this->config->getUsername(),
            'Password' => $this->config->getPassword(),
            'Format' => ResponseFormatEnum::XML,
        ]));

        $data = $this->encodeResponse((string)$response->getBody());
        return $this->arrayObjectMapper->deserialize($data, $responseType);
    }

    public function rawRequest(string $method, array $formParams, array $options = []): ResponseInterface
    {
        try {
            return $this->client->request(self::REQUEST_METHOD, $method, array_merge($options, [
                RequestOptions::FORM_PARAMS => array_merge($formParams, [
                    'Merchant_ID' => $this->config->getMerchantId(),
                ]),
            ]));
        } catch (GuzzleException $e) {
            throw new InternalError('Error sending request', $e);
        }
    }

    private function encodeResponse(string $body): array
    {
        $data = json_decode(
            json_encode((array)simplexml_load_string($body), JSON_THROW_ON_ERROR),
            true,
            flags: JSON_THROW_ON_ERROR
        );
        if (!is_array($data)) {
            throw new InternalError('Response was not decoded');
        }
        return $data;
    }
}
