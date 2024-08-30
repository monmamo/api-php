<?php

namespace App\Contracts;

interface Plucks
{
    /**
     * Plucks a value from a value or attribute.
     *
     * @implements \App\Contracts\Plucks::pluckForAttribute
     * @group accessor
     * @group attribute-getter
     * @group variadic
     */
    public function pluckForAttribute(mixed $value, array $attributes): mixed;

    /**
     * Plucks a value from a source.
     *
     * @implements \App\Contracts\Plucks::pluckOffset
     * @group unary
     */
    public function pluckOffset(mixed $source): mixed;

    /**
     * Plucks a value from a source.
     *
     * @implements \App\Contracts\Plucks::pluckProperty
     * @group unary
     */
    public function pluckProperty(mixed $source): mixed;
}
