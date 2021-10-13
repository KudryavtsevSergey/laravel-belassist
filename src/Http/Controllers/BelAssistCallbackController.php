<?php

namespace Sun\BelAssist\Http\Controllers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\Request;
use Sun\BelAssist\Dto\ResponseDto\OrderPaymentDto;
use Sun\BelAssist\Events\BelAssistPaymentReceivedEvent;
use Sun\BelAssist\Mapper\ArrayObjectMapper;
use Sun\BelAssist\ResponseGenerators\SuccessResponseGenerator;
use Sun\BelAssist\Responses\BelAssistResponse;

class BelAssistCallbackController extends AbstractController
{
    public const CONFIRM_PAYMENT_ROUTE_NAME = 'belassist.confirmpayment';

    private ArrayObjectMapper $arrayObjectMapper;
    private Dispatcher $dispatcher;

    public function __construct(
        ArrayObjectMapper $arrayObjectMapper,
        Dispatcher $dispatcher
    ) {
        $this->arrayObjectMapper = $arrayObjectMapper;
        $this->dispatcher = $dispatcher;
    }

    public function confirmPayment(Request $request): BelAssistResponse
    {
        /** @var OrderPaymentDto $payment */
        $payment = $this->arrayObjectMapper->deserialize($request->all(), OrderPaymentDto::class);
        $this->dispatcher->dispatch(new BelAssistPaymentReceivedEvent($payment));

        $generator = new SuccessResponseGenerator($payment->getBillNumber(), $payment->getPacketDate());
        return new BelAssistResponse($generator);
    }
}
