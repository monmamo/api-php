<?php

namespace App\Facades;

use Illuminate\Contracts\Container\BindingResolutionException;

trait EnumFacade
{
    /**
     * @group nonary
     *
     * @uses \Illuminate\Support\Facades\Facade::getFacadeAccessor
     * @uses \Illuminate\Support\Facades\Facade::getFacadeRoot
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \App\Strings\expectationMessage
     *
     * @throws \AssertionError
     */
    public static function name(): string
    {
        try {
            $instance = static::getFacadeRoot();
        } catch (BindingResolutionException $exception) {
            return 'UNRESOLVED';
        }
        \assert(
            $instance instanceof (static::getFacadeAccessor()),
            \App\Strings\expectationMessage(
                expectation: (static::getFacadeAccessor()),
                value: $instance,
            ),
        );
        return $instance->name;
    }

    /**
     * @group nonary
     *
     * @uses \Illuminate\Support\Facades\Facade::getFacadeAccessor
     * @uses \Illuminate\Support\Facades\Facade::getFacadeRoot
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \App\Strings\expectationMessage
     *
     * @throws \AssertionError
     */
    public static function value(): string
    {
        try {
            $instance = static::getFacadeRoot();
        } catch (BindingResolutionException $exception) {
            return 'UNRESOLVED';
        }
        \assert(
            $instance instanceof (static::getFacadeAccessor()),
            \App\Strings\expectationMessage(
                expectation: (static::getFacadeAccessor()),
                value: $instance,
            ),
        );
        return $instance->value;
    }
}
