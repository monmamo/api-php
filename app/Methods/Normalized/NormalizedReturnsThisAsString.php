<?php

namespace App\Methods\Normalized;

/**
 * usage:
 * use \App\Methods\Normalized\NormalizedReturnsThisAsString;
 */
trait NormalizedReturnsThisAsString
{
    /**
     * Returns the "normal" value of the object, as defined by \App\Casts\NormalScalar.
     *
     * @implements \App\Contracts\Normalizable::normalized
     * @group nonary
     */
    public function normalized(): string|int|float|bool|null|\DateTimeInterface
    {
        return (string) $this;
    }
}
