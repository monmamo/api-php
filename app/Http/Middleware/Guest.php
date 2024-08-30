<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 *
 */
final class Guest
{
    /**
     * Handles an incoming request.
     *
     * @author handler
     *
     * @group variadic
     *
     * @param \Illuminate\Http\Request $request (injected) The request we are handling.
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response) $next
     * @param null|string ...$guards
     *
     * @uses \App\Enums\Environments::info
     * @uses \redirect (Laravel) Gets an instance of the redirector.
     *
     * @return \Illuminate\Http\Response Appropriate response for the request.
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle(Request $request, \Closure $next, ...$guards)
    {
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return \redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request); // throws from ::retrieveByCredentials
    }
}
