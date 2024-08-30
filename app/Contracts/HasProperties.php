<?php

namespace App\Contracts;

interface HasProperties
{
    /**
     * Returns an option for a specific property value represented or produced by the option.
     *
     * If the inner value does not have properties or the property does not exist, return new \App\Options\NullOption or ThrowingException. Do not throw exception.
     *
     * @implements \App\Contracts\HasProperties::property
     * @group unary
     */
    public function property(mixed $property): mixed;
}
