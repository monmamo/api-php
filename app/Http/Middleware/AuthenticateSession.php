<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Auth\Factory;
use Illuminate\Contracts\Session\Middleware\AuthenticatesSessions;
use Illuminate\Http\Request;

/**
 * Our implementation of \Illuminate\Session\Middleware\AuthenticateSession.
 *
 * @author Laravel
 */
final class AuthenticateSession implements AuthenticatesSessions
{
    /**
     * Constructor. Creates a new middleware instance.
     *
     * @group magic
     * @group mutator
     * @group unary
     *
     * @return void
     */
    public function __construct(public readonly Factory $auth) {}

    /**
     * Logs the user out of the application.
     *
     * @author Laravel
     * @group unary
     *
     * @param \Illuminate\Http\Request $request
     *
     * @uses \Illuminate\Auth\AuthenticationException::__construct
     * @uses \Illuminate\Auth\AuthManager::guard
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    protected function logout($request): void
    {
        $this->auth->logoutCurrentDevice();

        $request->session()->flush();

        throw new AuthenticationException(
            'Unauthenticated.',
            [$this->auth->getDefaultDriver()],
            $this->redirectTo($request),
        );
    }

    /**
     * Returns the path the user should be redirected to when their session is not autheneticated.
     *
     * @author Laravel
     *
     * @return null|string
     */
    protected function redirectTo(Request $request) {}

    /**
     * Stores the user's current password hash in the session.
     *
     * @author Laravel
     *
     * @param \Illuminate\Http\Request $request
     */
    protected function storePasswordHashInSession($request): void
    {
        if (!$request->user()) {
            return;
        }

        $request->session()->put([
            'password_hash_' . $this->auth->getDefaultDriver() => $request->user()->getAuthPassword(),
        ]);
    }

    /**
     * Handles an incoming request.
     *
     * @author Laravel
     * @extends
     *
     * @param \Illuminate\Http\Request $request
     *
     * @uses \tap
     */
    public function handle($request, \Closure $next)
    {
        if (!$request->hasSession() || !$request->user()) {
            try {
                return $next($request);
            } catch (\Throwable $exception) {
                throw $exception;
            }
        }

        if ($this->auth->viaRemember()) {
            $passwordHash = \explode('|', $request->cookies->get($this->auth->getRecallerName()))[2] ?? null;

            if (!$passwordHash || $passwordHash !== $request->user()->getAuthPassword()) {
                $this->logout($request);
            }
        }

        if (!$request->session()->has('password_hash_' . $this->auth->getDefaultDriver())) {
            $this->storePasswordHashInSession($request);
        }

        if ($request->session()->get('password_hash_' . $this->auth->getDefaultDriver()) !== $request->user()->getAuthPassword()) {
            $this->logout($request);
        }

        return \tap(
            $next($request),
            /**
             * @group unary
             *
             * @uses \is_null (native) Returns whether a variable is null.
             */
            function () use ($request): void {
                if (!\is_null($this->auth->user())) {
                    $this->storePasswordHashInSession($request);
                }
            },
        );
    }
}
