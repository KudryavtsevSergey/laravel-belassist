<?php

namespace Sun\BelAssist;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Routing\Router;
use Sun\BelAssist\Http\Controllers\BelAssistCallbackController;
use Sun\BelAssist\Http\Controllers\BelAssistPaymentController;

class RouteRegistrar
{
    protected Registrar $router;

    public function __construct(Registrar $router)
    {
        $this->router = $router;
    }

    public function routes(): void
    {
        $this->router->group([], function (Router $router): void {
            $router->get('pay', [
                'uses' => 'BelAssistPaymentController@pay',
                'as' => BelAssistPaymentController::PAY_ROUTE_NAME,
            ]);
            $router->post('confirmpayment', [
                'uses' => 'BelAssistCallbackController@confirmPayment',
                'as' => BelAssistCallbackController::CONFIRM_PAYMENT_ROUTE_NAME,
            ]);
        });
    }
}
