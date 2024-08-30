<?php

namespace App\Methods;

/**
 * Trait for filling a model's `casts` property from a generator.
 */
trait SetCasts
{
    /**
     * Generates the attributes that should be cast.
     *
     * @see https://laravel.com/docs/9.x/eloquent-mutators#attribute-casting
     *
     * @implements \App\Methods\SetCasts::generateCasts
     * @group nonary
     * @group associative
     * @group generative
     */
    abstract protected function generateCasts(): \Traversable;
}
