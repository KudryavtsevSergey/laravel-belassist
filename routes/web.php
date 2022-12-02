<?php

use Illuminate\Support\Facades\Route;
use Sun\BelAssist\Http\Controllers\BelAssistCallbackController;

Route::post('confirmpayment', [
    'uses' => 'BelAssistCallbackController@confirmPayment',
    'as' => BelAssistCallbackController::CONFIRM_PAYMENT_ROUTE_NAME,
]);
