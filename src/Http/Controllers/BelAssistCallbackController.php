<?php

namespace Sun\BelAssist\Http\Controllers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\Request;
use Sun\BelAssist\BelAssistConfig;
use Sun\BelAssist\Dto\ResponseDto\OrderPaymentDto;
use Sun\BelAssist\Events\BelAssistPaymentReceivedEvent;
use Sun\BelAssist\Exceptions\Request\AbstractResponsableException;
use Sun\BelAssist\Exceptions\Request\InternalBelAssistError;
use Sun\BelAssist\Exceptions\Request\WrongBelAssistCheckValueException;
use Sun\BelAssist\Exceptions\Request\WrongBelAssistMerchantIdException;
use Sun\BelAssist\Exceptions\Request\WrongBelAssistSignatureException;
use Sun\BelAssist\Mapper\ArrayObjectMapper;
use Sun\BelAssist\ResponseGenerators\SuccessResponseGenerator;
use Sun\BelAssist\Responses\BelAssistResponse;
use Sun\BelAssist\Service\CheckValueServiceContract;
use Sun\BelAssist\Service\SignatureServiceContract;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class BelAssistCallbackController extends AbstractController
{
    public const CONFIRM_PAYMENT_ROUTE_NAME = 'belassist.confirmpayment';

    public function __construct(
        private SignatureServiceContract $signatureService,
        private CheckValueServiceContract $checkValueService,
        private BelAssistConfig $config,
        private ArrayObjectMapper $arrayObjectMapper,
        private Dispatcher $dispatcher,
    ) {
    }

    public function confirmPayment(Request $request): Response
    {
        try {
            /** @var OrderPaymentDto $payment */
            $payment = $this->arrayObjectMapper->deserialize($request->all(), OrderPaymentDto::class);

            $this->verifyPayment($payment);
            $this->dispatcher->dispatch(new BelAssistPaymentReceivedEvent($payment));

            $generator = new SuccessResponseGenerator($payment->getBillNumber(), $payment->getPacketDate());
            return (new BelAssistResponse($generator))->toResponse($request);
        } catch (AbstractResponsableException $exception) {
            throw $exception;
        } catch (Throwable $exception) {
            throw new InternalBelAssistError($exception);
        }
    }

    private function verifyPayment(OrderPaymentDto $payment): void
    {
        if ($this->config->getMerchantId() !== $payment->getMerchantId()) {
            throw new WrongBelAssistMerchantIdException($payment->getMerchantId());
        }
        if (
            $this->config->isCheckSignature()
            && !$this->signatureService->verify($payment, $payment->getSignature())
        ) {
            throw new WrongBelAssistSignatureException($payment->getSignature());
        }
        if (
            $this->config->isCheckCheckValue()
            && !$this->checkValueService->verify($payment, $payment->getCheckValue())
        ) {
            throw new WrongBelAssistCheckValueException($payment->getCheckValue());
        }
    }
}
