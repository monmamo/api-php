<?php

namespace App\Concerns;

use App\Methods\OrElse\OrElseReturnsWrappedThis;

/**
 * usage:
 * use \App\Concerns\AlwaysDefined;
 *
 * DO NOT define these methods here:
 * - self::isEmpty
 * - \IteratorAggregate::getIterator
 */
trait AlwaysDefined
{
    use OrElseReturnsWrappedThis;
}
