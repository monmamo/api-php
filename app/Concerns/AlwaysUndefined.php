<?php

namespace App\Concerns;

use App\Methods\Defer\DeferThrows;
use App\Methods\OrElse\OrElseReturnsElse;
use App\Methods\With\WithDoesNothing;

/**
 * Don't implement these here:
 * - self::filter
 * - self::filterNot
 * - self::foldLeft
 * - self::foldRight
 * - self::__get
 * - self::get
 * - self::getIterator
 *
 * Don't use these traits:
 * - \App\Concerns\Optional\NoOffsets
 * - \App\Concerns\Optional\NoProperties
 * - \App\Methods\MagicInvoke\InvokeDoesNothing
 * - \App\Methods\MagicGet\MagicGetNotValid
 *
 * usage:
 * use \App\Concerns\AlwaysUndefined;
 */
trait AlwaysUndefined
{
    use AlwaysEmpty;
    use DeferThrows;
    use OrElseReturnsElse;
    use WithDoesNothing;
}
