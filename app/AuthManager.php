<?php

namespace App;

use App\Contracts\MakesGuard;
use App\Enums\Dependencies;
use Illuminate\Auth\AuthManager as StandardAuthManager;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

/**
 * Our custom implementation of \Illuminate\Auth\AuthManager.
 *
 *
 *
 * @mixin \Illuminate\Contracts\Auth\Guard
 * @mixin \Illuminate\Contracts\Auth\StatefulGuard
 */
final class AuthManager extends StandardAuthManager
{
    /**
     * Constructor. Creates a new Auth manager instance.
     *
     *
     * @group magic
     * @group mutator
     * @group unary
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     *
     * @return void
     * @throws \AssertionError
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);
    }

    /**
     *
     * @group nonary
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \Illuminate\Auth\SessionGuard::setRememberDuration
     * @uses \Illuminate\Auth\SessionGuard::setRequest
     * @uses \method_exists (native) Returns whether the class method exists.
     *
     * @throws \AssertionError
     */
    private function makeGuard(): Guard
    {
        // \assert(
        //     isset($this->app[Dependencies::Hash->value]),
        //     "'hash' dependency needs to be set before making user provider",
        // );

        \assert($this->app instanceof MakesGuard);
        $guard = $this->app->makeGuardObject();

        $request = $this->app->rebinding(
            Dependencies::Request->value,
            /**
             * @group trinary
             *
             * @uses \Illuminate\Auth\SessionGuard::setRequest
             * @uses \method_exists (native) Returns whether the class method exists.
             */
            static function ($app, Request $request) use ($guard): void {
                if (\method_exists($guard, 'setRequest')) {
                    $guard->setRequest($request);
                }
            },
        );

        if (\method_exists($guard, 'setRequest') && $request instanceof Request) {
            $guard->setRequest($request);
        }

        if (\method_exists($guard, 'setRememberDuration') && isset($config['remember'])) {
            $guard->setRememberDuration($config['remember']);
        }

        return $guard;
    }

    /**
     * Attempts to get the guard from the local cache.
     *
     *
     * @extends \Illuminate\Auth\AuthManager::guard
     *
     * @param null|string $name
     *
     * @uses \App\Enums\Portals::guard
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \Illuminate\Auth\AuthManager::guard
     * @uses \is_null (native) Returns whether a variable is null.
     *
     * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard
     * @throws \AssertionError
     */
    public function guard($name = null)
    {
        \assert(
            isset($this->app[Dependencies::Hash->value]),
            "'hash' dependency needs to be set before making user provider",
        );

        if (\is_null($name)) {
            return $this->_portal_guard ??= $this->makeGuard();
        }

        return parent::guard($name);
    }

    /**
     * Creates a new Auth manager instance.
     *
     *
     * @group unary
     *
     * @uses \App\AuthManager::__construct
     *
     * @return void
     */
    public static function make(Application $app)
    {
        return new self($app);
    }
}
