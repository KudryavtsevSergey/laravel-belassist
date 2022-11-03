<?php

namespace Sun\BelAssist\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
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

    public function request(string $method, RequestDtoInterface $requestDto, string $responseType): ResponseDtoInterface
    {
        try {
            $formParams = array_merge($this->arrayObjectMapper->serialize($requestDto), [
                'Merchant_ID' => $this->config->getMerchantId(),
                'Login' => $this->config->getUsername(),
                'Password' => $this->config->getPassword(),
                'Format' => ResponseFormatEnum::XML,
            ]);

            $response = $this->client->request(self::REQUEST_METHOD, $method, [
                RequestOptions::FORM_PARAMS => $formParams,
            ]);

            $data = $this->encodeResponse((string)$response->getBody());
            return $this->arrayObjectMapper->deserialize($data, $responseType);
        } catch (GuzzleException $e) {
            throw new InternalError('Error sending request', $e);
        }
    }

    private function encodeResponse(string $body): array
    {
        return json_decode(json_encode((array)simplexml_load_string($body)), true);
    }
}
