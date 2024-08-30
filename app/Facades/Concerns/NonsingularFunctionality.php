<?php

namespace App\Facades\Concerns;

trait NonsingularFunctionality
{
    /**
     * Method invoked when attempting invoke an inaccessible or undefined method of this class in a static context.
     *
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @param string $method Name of the method being called.
     * @param mixed[] $arguments Enumerated array containing the parameters passed to the method.
     *
     * @uses \Illuminate\Support\Facades\Facade::getFacadeAccessor
     * @uses \array_shift (native) Removes the first element from an array and returns it.
     * @uses \App\Callables\runObjectMethod
     *
     * @throws \BadMethodCallException from \App\Callables\runObjectMethod
     */
    public static function __callStatic($method, $arguments)
    {
        $source = \array_shift($arguments);
        $accessor = static::getFacadeAccessor();
        return \App\Callables\runObjectMethod(new $accessor($source), $method, $arguments);
    }
}
