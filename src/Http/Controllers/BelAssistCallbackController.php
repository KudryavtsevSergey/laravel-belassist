<?php

declare(strict_types=1);

namespace Sun\BelAssist\Http\Controllers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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
use Sun\BelAssist\Service\CheckValue\CheckValueServiceInterface;
use Sun\BelAssist\Service\Signature\SignatureServiceInterface;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class BelAssistCallbackController extends Controller
{
    public function __construct(
        private readonly SignatureServiceInterface $signatureService,
        private readonly CheckValueServiceInterface $checkValueService,
        private readonly BelAssistConfig $config,
        private readonly ArrayObjectMapper $arrayObjectMapper,
        private readonly Dispatcher $dispatcher,
    ) {
    }

    public function __invoke(Request $request): Response
    {
        try {
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
        $signature = $payment->getSignature();
        if (
            $this->config->isCheckSignature()
            && (empty($signature) || !$this->signatureService->verify($payment, $signature))
        ) {
            throw new WrongBelAssistSignatureException($signature);
        }
        if (
            $this->config->isCheckCheckValue()
            && !$this->checkValueService->verify($payment, $payment->getCheckValue())
        ) {
            throw new WrongBelAssistCheckValueException($payment->getCheckValue());
        }
    }
}
