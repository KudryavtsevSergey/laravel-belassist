<?php

namespace Sun\BelAssist;

use SimpleXMLElement;

class BelAssistHttpClient
{
    private BelAssistConfig $config;

    public function __construct(BelAssistConfig $config)
    {
        $this->config = $config;
    }

    public function request(string $method, array $data): array
    {
        $data = array_merge($data, [
            'Merchant_ID' => $this->config->getMerchantId(),
            'Login' => $this->config->getUsername(),
            'Password' => $this->config->getPassword(),
        ]);

        $url = sprintf('%s/%s', $this->config->getGateway(), $method);

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query($data),
        ]);
        $response = curl_exec($curl);
        $response = $this->encodeResponse($response);
        curl_close($curl);
        return $response;
    }

    private function encodeResponse($response): array
    {
        $response = new SimpleXMLElement($response);
        return (array)$response;
    }
}
