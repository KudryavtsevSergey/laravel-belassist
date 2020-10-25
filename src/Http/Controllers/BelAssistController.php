<?php

namespace Sun\BelAssist\Http\Controllers;

use Illuminate\Http\Request;
use Sun\BelAssist\Events\BelAssistPaymentReceivedEvent;
use Sun\BelAssist\Models\BelAssistPaymentModel;
use Sun\BelAssist\ResponseGenerators\SuccessResponseGenerator;
use Sun\BelAssist\Responses\BelAssistResponse;

class BelAssistController extends AbstractController
{
    public function confirmPayment(Request $request): BelAssistResponse
    {
        $payment = BelAssistPaymentModel::createFromArray($request->all());
        event(new BelAssistPaymentReceivedEvent($payment));

        $generator = new SuccessResponseGenerator($payment->getBillNumber(), $payment->getPacketDate());
        return new BelAssistResponse($generator);
    }
}
