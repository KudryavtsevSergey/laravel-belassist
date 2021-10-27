<?php

namespace Sun\BelAssist\Http\Controllers;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Sun\BelAssist\BelAssistConfig;
use Sun\BelAssist\Mapper\ArrayObjectMapper;
use Sun\BelAssist\Dto\ResponseDto\BelAssistPaymentDto;
use Sun\BelAssist\Service\CheckValueServiceContract;
use Sun\BelAssist\Service\SignatureServiceContract;

class BelAssistPaymentController extends AbstractController
{
    public const PAY_ROUTE_NAME = 'belassist.pay';

    private BelAssistConfig $config;
    private ResponseFactory $response;
    private CheckValueServiceContract $checkValueService;
    private SignatureServiceContract $signatureService;
    private ArrayObjectMapper $arrayObjectMapper;

    public function __construct(
        BelAssistConfig $config,
        ResponseFactory $response,
        CheckValueServiceContract $checkValueService,
        SignatureServiceContract $signatureService,
        ArrayObjectMapper $arrayObjectMapper
    ) {
        $this->config = $config;
        $this->response = $response;
        $this->checkValueService = $checkValueService;
        $this->signatureService = $signatureService;
        $this->arrayObjectMapper = $arrayObjectMapper;
    }

    public function pay(Request $request): Response
    {
        /** @var BelAssistPaymentDto $payment */
        $payment = $this->arrayObjectMapper->deserialize($request->all(), BelAssistPaymentDto::class);

        return $this->response->view('belassist::payment', [
            'gateway' => $this->config->getGateway(),
            'merchantId' => $this->config->getMerchantId(),
            'order' => $payment->getOrder(),
            'delay' => $payment->getDelay(),
            'language' => $payment->getLanguage(),
            'amount' => $payment->getFormattedAmount(),
            'currency' => $payment->getCurrency(),
            'lastname' => $payment->getLastname(),
            'name' => $payment->getName(),
            'email' => $payment->getEmail(),
            'phone' => $payment->getPhone(),
            'urlReturn' => $payment->getUrlReturn(),
            'signature' => $this->signatureService->generate($payment),
            'checkValue' => $this->checkValueService->generate($payment),
        ]);
    }
}
