<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

abstract class LazyFacade extends Facade
{
    /**
     * @group nonary
     */
    abstract protected static function getValue();

    /**
     * Resolves the facade root.
     *
     * @group nonary
     *
     * @uses \App\Facades\LazyFacade::getValue
     * @uses \Illuminate\Contracts\Foundation\Application::bind
     * @uses \Illuminate\Support\Facades\Facade::getFacadeRoot
     *
     * @throws \AssertionError
     */
    public static function bind(): void
    {
        \assert(isset(static::$app));
        static::$app->bind(static::getFacadeAccessor(), static::getValue(...));
    }
}
