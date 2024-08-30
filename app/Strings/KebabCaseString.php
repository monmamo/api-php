<?php

namespace App\Strings;

abstract class KebabCaseString
{
    public const VALIDITY_PATTERN = '/^([a-z0-9]+-)*[a-z0-9]+$/';

    /**
     * @group unary
     *
     * @uses \ArrayIterator::__construct
     * @uses \preg_split (native) Split string by a regular expression.
     */
    public static function dissolver(string $item): \Traversable
    {
        return new \ArrayIterator(\preg_split('/-+/', $item, -1, \PREG_SPLIT_NO_EMPTY));
    }
}
