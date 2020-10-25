<?php

namespace Sun\BelAssist\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Sun\BelAssist\BelAssistConfig;
use Sun\BelAssist\Exceptions\Request\WrongBelAssistMerchantIdException;

class VerifyBelAssistMerchantId
{
    const REQUEST_MERCHANT_ID = 'merchant_id';

    private BelAssistConfig $config;

    public function __construct(BelAssistConfig $config)
    {
        $this->config = $config;
    }

    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     * @throws WrongBelAssistMerchantIdException
     */
    public function handle(Request $request, Closure $next)
    {
        $merchantId = $request->get(self::REQUEST_MERCHANT_ID);
        if ($this->config->getMerchantId() != $merchantId) {
            throw new WrongBelAssistMerchantIdException($merchantId);
        }

        return $next($request);
    }
}
