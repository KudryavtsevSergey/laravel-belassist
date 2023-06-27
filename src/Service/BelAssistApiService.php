<?php

declare(strict_types=1);

namespace Sun\BelAssist\Service;

use GuzzleHttp\RequestOptions;
use Sun\BelAssist\BelAssistConfig;
use Sun\BelAssist\Dto\RequestDto\OrderStateRequestDto;
use Sun\BelAssist\Dto\RequestDto\BelAssistPaymentDto;
use Sun\BelAssist\Dto\ResponseDto\OrderStateResponseDto;
use Sun\BelAssist\Constant\ApiConstant;
use Sun\BelAssist\Mapper\ArrayObjectMapper;
use Sun\BelAssist\Service\CheckValue\CheckValueServiceInterface;
use Sun\BelAssist\Service\Signature\SignatureServiceInterface;

class BelAssistApiService
{
    public function __construct(
        private BelAssistHttpClientService $httpClient,
        private BelAssistConfig $config,
        private CheckValueServiceInterface $checkValueService,
        private SignatureServiceInterface $signatureService,
        private ArrayObjectMapper $arrayObjectMapper,
    ) {
    }

    public function orderState(OrderStateRequestDto $orderStateRequestDto): OrderStateResponseDto
    {
        return $this->httpClient->request(ApiConstant::ORDER_STATE, $orderStateRequestDto, OrderStateResponseDto::class);
    }

    public function payOrder(BelAssistPaymentDto $belAssistPaymentDto): ?string
    {
        $data = $this->arrayObjectMapper->serialize($belAssistPaymentDto);
        if ($this->config->isCheckSignature()) {
            $data['Signature'] = $this->signatureService->generate($belAssistPaymentDto);
        }
        if ($this->config->isCheckCheckValue()) {
            $data['Checkvalue'] = $this->checkValueService->generate($belAssistPaymentDto);
        }

        $response = $this->httpClient->rawRequest(ApiConstant::PAY_ORDER, $data, [
            RequestOptions::ALLOW_REDIRECTS => false,
        ]);

        $location = current($response->getHeader('location')) ?: null;
        if ($location === null) {
            return null;
        }

        $gateway = $this->config->getGateway();
        $location = str_replace($gateway, '', $location);
        $location = ltrim($location, '/');
        return sprintf('%s/%s', $gateway, $location);
    }
}
