<?php

namespace Sun\BelAssist;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Routing\Router;
use Sun\BelAssist\Http\Middleware\SafeWrapper;
use Sun\BelAssist\Http\Middleware\VerifyBelAssistAuthCode;
use Sun\BelAssist\Http\Middleware\VerifyBelAssistMerchantId;

class RouteRegistrar
{
    protected Registrar $router;

    public function __construct(Registrar $router)
    {
        $this->router = $router;
    }

    public function routes()
    {
        $this->router->group(['middleware' => [SafeWrapper::class, VerifyBelAssistAuthCode::class, VerifyBelAssistMerchantId::class]], function (Router $router) {
            $router->post('confirmpayment', [
                'uses' => 'BelAssistController@confirmPayment',
                'as' => 'belassist.confirmpayment',
            ]);
        });
    }
}
