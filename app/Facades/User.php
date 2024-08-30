<?php

namespace App\Facades;

use App\Methods\Transform\TransformFacadeRoot;
use App\Models\Person;
use Illuminate\Contracts\Auth\Factory;
use Illuminate\Support\Facades\Facade;

/**
 * userId: User::getKey()
 * userName: User::getAttribute('name_first_last').
 *
 * For boolean attributes, use guards instead.
 * see \App\Providers\AuthServiceProvider
 * see \Illuminate\Support\Facades\Auth::can
 */
final class User extends Facade
{
    use TransformFacadeRoot;

    /**
     * Handles dynamic, static calls to the object.
     *
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @uses \App\Callables\runObjectMethod
     * @uses \App\Facades\User::getFacadeRoot
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \method_exists (native) Returns whether the class method exists.
     *
     * @throws \AssertionError
     * @throws \BadMethodCallException from \App\Callables\runObjectMethod
     */
    public static function __callStatic($method, $args)
    {
        $user = self::getFacadeRoot();
        \assert(
            $user instanceof Person,
            'no authenticated user',
        );

        return \App\Callables\runObjectMethod($user, $method, $args);
    }

    /**
     * Returns the root object behind the facade.
     *
     * @extends \Illuminate\Support\Facades\Facade::getFacadeRoot
     * @group nonary
     *
     * @uses \Illuminate\Contracts\Foundation\Application::make
     *
     * @return null|\App\Models\Person
     */
    public static function getFacadeRoot()
    {
        static $user;
        return $user ??= self::$app->make(Factory::class)->user();
    }

    /**
     * @group nonary
     *
     * @uses \App\Facades\User::getFacadeRoot
     */
    public static function instance(): Person
    {
        return self::getFacadeRoot();
    }

    /**
     * userId: Auth::user()->getKey()
     * userName: Auth::user()->name_first_last.
     *
     * @group nonary
     *
     * @uses \App\Facades\User::getFacadeRoot
     */
    public static function isAuthenticated(): bool
    {
        return self::getFacadeRoot() instanceof Person;
    }
}
