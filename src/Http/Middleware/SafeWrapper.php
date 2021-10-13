<?php

namespace Sun\BelAssist\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Sun\BelAssist\Exceptions\Request\InternalBelAssistError;
use Sun\BelAssist\Exceptions\Request\ResponsableThrowable;
use Throwable;

class SafeWrapper
{
    public function handle(Request $request, Closure $next)
    {
        try {
            return $next($request);
        } catch (ResponsableThrowable $exception) {
            throw $exception;
        } catch (Throwable $exception) {
            throw new InternalBelAssistError($exception);
        }
    }
}
