<?php

return [
    'gateway' => env('ASSIST_GATEWAY', 'https://pay169.paysec.by'),
    'merchant_id' => env('ASSIST_MERCHANT_ID'),
    'username' => env('ASSIST_USERNAME'),
    'password' => env('ASSIST_PASSWORD'),
    'salt' => env('ASSIST_SALT'),
];
