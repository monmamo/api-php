<?php

namespace App\Methods\OrElse;

use App\Contracts\Optional;

trait OrElseReturnsThis
{
    /**
     * Returns this option if non-empty, or the passed option otherwise.
     *
     * @implements \App\Contracts\Optional::orElse
     * @group unary
     * @group passthrough
     */
    final public function orElse(Optional $else): Optional
    {
        return $this;
    }
}
