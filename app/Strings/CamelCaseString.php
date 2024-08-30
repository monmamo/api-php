<?php

namespace App\Strings;

abstract class CamelCaseString
{
    public const VALIDITY_PATTERN = '/^[a-z]+([A-Z][a-z]+)+$/';

    /**
     * @group unary
     *
     * @uses \ArrayIterator::__construct
     * @uses \preg_split (native) Split string by a regular expression.
     */
    public static function dissolver(string $item): \Traversable
    {
        return new \ArrayIterator(\preg_split('/(?=[A-Z])/', $item, -1, \PREG_SPLIT_NO_EMPTY));
    }
}
