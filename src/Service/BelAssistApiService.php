<?php

namespace Sun\BelAssist\Service;

use Sun\BelAssist\Dto\RequestDto\OrderStateRequestDto;
use Sun\BelAssist\Dto\ResponseDto\OrderStateResponseDto;
use Sun\BelAssist\Enum\ApiEnum;

class BelAssistApiService
{
    public function __construct(
        private BelAssistHttpClientService $httpClient,
    ) {
    }

    public function orderState(OrderStateRequestDto $orderStateRequestDto): OrderStateResponseDto
    {
        /** @var OrderStateResponseDto $responseDto */
        $responseDto = $this->httpClient->request(
            ApiEnum::ORDER_STATE,
            $orderStateRequestDto,
            OrderStateResponseDto::class
        );
        return $responseDto;
    }
}
