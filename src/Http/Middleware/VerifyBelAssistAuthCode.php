<?php

namespace Sun\BelAssist\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Sun\BelAssist\BelAssistConfig;
use Sun\BelAssist\Exceptions\Request\WrongBelAssistAuthCodeException;

class VerifyBelAssistAuthCode
{
    const BEL_ASSIST_REQUEST_CODE = 'auth_code';

    private BelAssistConfig $config;

    public function __construct(BelAssistConfig $config)
    {
        $this->config = $config;
    }

    public function handle(Request $request, Closure $next)
    {
        $authCode = $request->get(self::BEL_ASSIST_REQUEST_CODE);
        if ($this->config->getRequestCode() != $authCode) {
            throw new WrongBelAssistAuthCodeException($authCode);
        }

        return $next($request);
    }
}
