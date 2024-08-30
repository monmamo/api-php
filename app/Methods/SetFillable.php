<?php

namespace App\Methods;

/**
 * Trait for filling a model's `fillable` property from a generator.
 */
trait SetFillable
{
    /**
     * Generates the attributes that are mass assignable.
     *
     * @see https://laravel.com/docs/9.x/eloquent#mass-assignment
     *
     * @implements \App\Methods\SetFillable::generateFillable
     * @group nonary
     */
    abstract protected function generateFillable(): \Traversable;
}
