<?php

namespace App\Methods\Sprintf;

/**
 * closure: fn (...$pieces): static => static::sprintf($format, ...$pieces).
 */
trait SprintfOnMake
{
    /**
     * @group late-binding
     * @group variadic
     *
     * @param string $format Formatting string that is compatible with \sprintf.
     *
     * @uses \array_map (native) Applies the callback to the elements of the given arrays.
     * @uses \vsprintf (native) Returns a formatted string.
     * @uses static::make
     *
     * @throws \Throwable Any exception thrown by any called method.
     */
    public static function sprintf(string $format, ...$pieces): static
    {
        $resolved_pieces = \array_map(static::make(...), $pieces);
        return new static(\vsprintf($format, $resolved_pieces));
    }
}
