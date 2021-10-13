<?php

namespace Sun\BelAssist;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Routing\Router;
use Sun\BelAssist\Http\Controllers\BelAssistCallbackController;
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

    public function routes(): void
    {
        $this->router->group(
            ['middleware' => [SafeWrapper::class, VerifyBelAssistAuthCode::class, VerifyBelAssistMerchantId::class]],
            function (Router $router): void {
                $router->post('confirmpayment', [
                    'uses' => 'BelAssistCallbackController@confirmPayment',
                    'as' => BelAssistCallbackController::CONFIRM_PAYMENT_ROUTE_NAME,
                ]);
            }
        );
    }
}
