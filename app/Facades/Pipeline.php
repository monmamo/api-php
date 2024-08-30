<?php

namespace App\Facades;

/**
 * Returns a function that is a pipeline of component functions.
 *
 * Not to be confused with \Illuminate\Pipeline\Pipeline.
 */
abstract class Pipeline
{
    /**
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @param string $method Name of the method being called.
     * @param mixed[] $arguments Enumerated array containing the parameters passed to the method.
     *
     * @uses \App\Callables\runObjectMethod
     *
     * @return \Closure
     */
    public static function __callStatic($method, $arguments)
    {
        return fn (object $target) => \App\Callables\runObjectMethod($target, $method, $arguments);
    }
}
