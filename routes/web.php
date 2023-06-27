<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Sun\BelAssist\Http\Controllers\BelAssistCallbackController;

Route::post('confirmpayment', BelAssistCallbackController::class);
