<?php

namespace App\Concerns;

/**
 * usage:
 * use \App\Concerns\AlwaysSingleValue;
 *
 * Do not use this trait if \App\Concerns\AlwaysSingleValue is more appropriate.
 */
trait Shallow
{
    /**
     * Method invoked when attempting invoke an inaccessible or undefined method of this class in an object context.
     *
     * Returns another of self so that property/method chaining doesn't fail.
     *
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @param string $method Method being called.
     * @param mixed[] $parameters Enumerated array containing the parameters passed to the method.
     */
    public function __call($method, $parameters)
    {
        return new self();
    }

    /**
     * Returns another of self so that property/method chaining doesn't fail.
     *
     * @group magic
     * @group accessor
     * @group unary
     * @group accessor-by-key
     * @group factory
     *
     * @param string $key Property being accessed.
     */
    public function __get(mixed $key)
    {
        return new self();
    }
}
