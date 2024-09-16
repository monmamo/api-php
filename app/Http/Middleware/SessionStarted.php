<?php

namespace App\Http\Middleware;

use App\Http\NormalizeResponse;
use Illuminate\Http\Request;

/**
 * Anything we want to do after the session is started but before the session is authenticated.
 *
 * @author Laravel
 */
final class SessionStarted
{
    use NormalizeResponse;

    /**
     * Massages the request per the needs of the middleware.
     *
     * In this case, just call $next($request) and run the result through our resolver.
     *
     * @implements \App\Http\NormalizeResponse::massageRequest
     * @group unary
     *
     * @param \Illuminate\Http\Request $request (injected) The request we are handling.
     */
    protected function massageRequest(Request $request)
    {
        return true;
    }
}
