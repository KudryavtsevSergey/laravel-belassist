<?php

namespace Sun\BelAssist;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Sun\BelAssist\Requests\BelAssistPayment;
use Sun\BelAssist\Models\OrderStateModel;

class BelAssist
{
    private BelAssistHttpClient $httpClient;
    private BelAssistConfig $config;

    public function __construct(BelAssistHttpClient $httpClient, BelAssistConfig $config)
    {
        $this->httpClient = $httpClient;
        $this->config = $config;
    }

    public function pay(BelAssistPayment $belAssistPayment): Response
    {
        return response()->view('belassist::payment', [
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

    public function orderState(string $id): OrderStateModel
    {
        $response = $this->httpClient->request('orderstate/orderstate.cfm', [
            'Ordernumber' => $id
        ]);

        return OrderStateModel::createFromArray($response);
    }

    public function routes(array $options = [])
    {
        $defaultOptions = ['prefix' => 'belassist', 'namespace' => '\Sun\BelAssist\Http\Controllers'];

        $options = array_merge($defaultOptions, $options);

        Route::group($options, function ($router) {
            (new RouteRegistrar($router))->routes();
        });
    }
}
