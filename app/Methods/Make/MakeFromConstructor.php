<?php

namespace App\Methods\Make;

trait MakeFromConstructor
{
    /**
     * Constructs a new slug from a sequence of pieces.
     *
     * @see app/Methods/Make/README.md
     *
     * @group factory
     * @group unary
     *
     * @uses \App\Options\unwrap
     * @uses static::__construct
     */
    public static function make(mixed $value): static
    {
        if ($value instanceof static) {
            return $value;
        }
        return new static(\App\Options\unwrap($value));
    }

    /**
     * Constructs a new slug from a sequence of pieces.
     *
     * @deprecated This is for existing cases of "::of".
     *
     * @group factory
     * @group unary
     *
     * @uses static::__construct
     */
    public static function of(mixed $value): static
    {
        return self::make($value);
    }
}
