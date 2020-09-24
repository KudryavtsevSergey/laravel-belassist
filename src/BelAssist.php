<?php

namespace Sun\BelAssist;

use Illuminate\Http\Response;
use Sun\BelAssist\Models\BelAssistPayModel;

class BelAssist
{
    private BelAssistHttpClient $httpClient;
    private BelAssistConfig $config;

    public function __construct(BelAssistHttpClient $httpClient, BelAssistConfig $config)
    {
        $this->httpClient = $httpClient;
        $this->config = $config;
    }

    public function pay(BelAssistPayModel $belAssistPayModel): Response
    {
        return response()->view('belassist::payment', [
            'merchantId' => $this->config->getMerchantId(),
            'order' => $belAssistPayModel->getOrder(),
            'delay' => $belAssistPayModel->getDelay(),
            'language' => $belAssistPayModel->getLanguage(),
            'amount' => $belAssistPayModel->getAmount(),
            'currency' => $belAssistPayModel->getCurrency(),
            'lastname' => $belAssistPayModel->getLastname(),
            'name' => $belAssistPayModel->getName(),
            'email' => $belAssistPayModel->getEmail(),
            'phone' => $belAssistPayModel->getPhone(),
            'urlReturn' => $belAssistPayModel->getUrlReturn(),
        ]);
    }

    public function orderState($id): array
    {
        return $this->httpClient->request('orderstate/orderstate.cfm', [
            'Format' => 3,
            'Ordernumber' => $id
        ]);
    }
}
