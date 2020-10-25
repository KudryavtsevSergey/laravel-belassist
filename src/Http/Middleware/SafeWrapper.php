<?php

namespace Sun\BelAssist\Http\Middleware;

use Closure;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Sun\BelAssist\Exceptions\Request\InternalBelAssistError;
use Throwable;

class SafeWrapper
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     * @throws InternalBelAssistError
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            return $next($request);
        } catch (Throwable $exception) {
            if ($exception instanceof Responsable) {
                return $exception;
            }
            throw new InternalBelAssistError($exception);
        }
    }
}
