<?php

namespace Sun\BelAssist;

use Http;

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
            'Format' => 3,
        ]);

        $url = sprintf('%s/%s', $this->config->getGateway(), $method);

        $response = Http::post($url, [
            $data,
        ]);

        $body = $response->body();
        return $this->encodeResponse($body);
    }

    private function encodeResponse($response): array
    {
        return json_decode(json_encode((array)simplexml_load_string($response)), true);
    }
}
