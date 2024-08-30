<?php

namespace App\Methods\OrElse;

use App\Contracts\Optional;

trait OrElseReturnsWrappedThis
{
    /**
     * Returns this option if non-empty, or the passed option otherwise.
     *
     * @implements \App\Contracts\Optional::orElse
     * @group unary
     * @group passthrough
     *
     * @uses \App\Options\wrap
     */
    final public function orElse(Optional $else): Optional
    {
        return \App\Options\wrap($this);
    }
}
