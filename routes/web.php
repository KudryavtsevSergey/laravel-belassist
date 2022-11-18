<?php

use Illuminate\Support\Facades\Route;
use Sun\BelAssist\Http\Controllers\BelAssistCallbackController;
use Sun\BelAssist\Http\Controllers\BelAssistPaymentController;

Route::get('pay', [
    'uses' => 'BelAssistPaymentController@pay',
    'as' => BelAssistPaymentController::PAY_ROUTE_NAME,
]);
Route::post('confirmpayment', [
    'uses' => 'BelAssistCallbackController@confirmPayment',
    'as' => BelAssistCallbackController::CONFIRM_PAYMENT_ROUTE_NAME,
]);
