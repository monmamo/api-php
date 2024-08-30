<?php

namespace App\Strings;

abstract class SnakeCaseString
{
    public const VALIDITY_PATTERN = '/^[a-z0-9_]+$/';

    /**
     * @group unary
     *
     * @uses \ArrayIterator::__construct
     * @uses \preg_split (native) Split string by a regular expression.
     */
    public static function dissolver(string $item): \Traversable
    {
        return new \ArrayIterator(\preg_split('/_+/', $item, -1, \PREG_SPLIT_NO_EMPTY));
    }
}
