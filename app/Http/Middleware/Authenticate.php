<?php

namespace App\Http\Middleware;

use App\Facades\URL;
use App\View\LoginForm;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as Http;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Authentication middleware.
 *
 * This middleware is a wrapper around the Laravel authentication middleware.
 *
 * The guards invoked will usually be of class \Illuminate\Auth\SessionGuard.
 *
 * @author Laravel
 */
final class Authenticate extends \Illuminate\Auth\Middleware\Authenticate
{
    /**
     * Returns whether the user is logged in to any of the given guards.
     *
     * Injects the host into the list of guards. The host guard allows only certain types of users. Host guards are defined in the config/auth.php.
     *
     * ❗ Do not put fancy debugging infrastructure in here.
     *
     * @extends \Illuminate\Auth\Middleware\Authenticate::authenticate
     * @group variadic
     *
     * @param \Illuminate\Http\Request $request
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \Illuminate\Container\Container::getInstance
     * @uses \Illuminate\Container\Container::make
     * @uses \Illuminate\Contracts\Auth\Factory::guard
     * @uses \Illuminate\Contracts\Auth\Factory::shouldUse
     * @uses \Illuminate\Http\Request::host
     * @uses \sprintf (native) Returns a formatted string.
     *
     * @throws \AssertionError
     */
    protected function authenticate($request, array $guards): void
    {
        $auth = Container::getInstance()->make('auth');

        \assert(!\is_null($auth));
        $host_guard = $auth->guard();

        if ($host_guard->check()) {
            return;
        }

        parent::authenticate($request, $guards);
    }

    /**
     * Returns the path to redirect unauthenticated user.
     *
     * Almost always the login form.
     *
     * \Illuminate\Auth\Middleware\Authenticate::redirectTo does not return a value for this.
     *
     * @extends \Illuminate\Auth\Middleware\Authenticate::redirectTo
     * @group unary
     *
     * @param \Illuminate\Http\Request $request (injected) The request we are handling.
     *
     * @uses \App\Exceptions\AuthenticationException::__construct
     * @uses \App\Facades\URL::route Returns the URL to a named route. Dumps and throws.
     * @uses \Illuminate\Auth\AuthenticationException::redirectTo
     * @uses \Illuminate\Http\Request::expectsJson
     * @uses \Illuminate\Http\Request::url
     * @uses \Symfony\Component\HttpKernel\Exception\HttpException::__construct
     *
     * @return null|string
     * @throws \App\Exceptions\AuthenticationException
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    protected function redirectTo($request)
    {
        if ($request->expectsJson()) {
            return;
        }

        $exception = new AuthenticationException(
            'Unauthenticated.',
            [],
        );

        $destination = $exception->redirectTo() ?? URL::route(LoginForm::class);

        if ($destination === $request->url()) {
            throw new HttpException(
                Http::HTTP_INTERNAL_SERVER_ERROR,
                'recursive redirect detected: ' . $destination,
            );
        }

        return $destination;
    }
}
