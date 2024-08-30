<?php

namespace App\Methods\Make;

trait MakeFromConstructorVariadic
{
    /**
     * Constructs a new slug from a sequence of pieces.
     *
     * @see app/Methods/Make/README.md
     *
     * @group variadic
     * @group factory
     *
     * @uses static::__construct
     */
    public static function make(...$pieces): static
    {
        return new static($pieces);
    }

    /**
     * Constructs a new slug from a sequence of pieces.
     *
     * @group variadic
     *
     * @uses static::__construct
     */
    public static function of(...$pieces): static
    {
        return new static($pieces);
    }
}
