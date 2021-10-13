<?php

namespace Sun\BelAssist;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Sun\BelAssist\Requests\BelAssistPayment;

class BelAssist
{
    private BelAssistConfig $config;
    private ResponseFactory $response;

    public function __construct(
        BelAssistConfig $config,
        ResponseFactory $response
    ) {
        $this->config = $config;
        $this->response = $response;
    }

    public function pay(BelAssistPayment $belAssistPayment): Response
    {
        return $this->response->view('belassist::payment', [
            'gateway' => $this->config->getGateway(),
            'merchantId' => $this->config->getMerchantId(),
            'order' => $belAssistPayment->getOrder(),
            'delay' => $belAssistPayment->getDelay(),
            'language' => $belAssistPayment->getLanguage(),
            'amount' => $belAssistPayment->getFormattedAmount(),
            'currency' => $belAssistPayment->getCurrency(),
            'lastname' => $belAssistPayment->getLastname(),
            'name' => $belAssistPayment->getName(),
            'email' => $belAssistPayment->getEmail(),
            'phone' => $belAssistPayment->getPhone(),
            'urlReturn' => $belAssistPayment->getUrlReturn(),
        ]);
    }

    public function routes(array $options = [])
    {
        $defaultOptions = ['prefix' => 'belassist', 'namespace' => '\Sun\BelAssist\Http\Controllers'];

        $options = array_merge($defaultOptions, $options);

        Route::group($options, function ($router): void {
            (new RouteRegistrar($router))->routes();
        });
    }
}
