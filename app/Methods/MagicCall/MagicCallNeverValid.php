<?php

namespace App\Methods\MagicCall;

use Illuminate\Support\Traits\ForwardsCalls;

trait MagicCallNeverValid
{
    use ForwardsCalls;

    /**
     * Method invoked when attempting invoke an inaccessible or undefined method of this class in an object context.
     * Dynamically passes a method to the underlying object.
     *
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @param mixed[] $parameters Enumerated array containing the parameters passed to the method.
     *
     * @throws \BadMethodCallException
     */
    public function __call($name, $parameters): void
    {
        self::throwBadMethodCallException($name);
    }
}
