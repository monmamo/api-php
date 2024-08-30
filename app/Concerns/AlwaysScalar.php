<?php

namespace App\Concerns;

use App\Methods\Count\CountIsAlwaysOne;

/**
 * usage:
 * use \App\Concerns\AlwaysScalar;
 *
 * DO NOT define these methods here:
 * - self::isEmpty
 * - getIterator
 */
trait AlwaysScalar
{
    use AlwaysDefined;
    use AlwaysSingleValue;
    use CountIsAlwaysOne;
}
