<?php

namespace App\Contracts;

interface HasFloatCast
{
    /**
     * @implements \App\Contracts\HasFloatCast::asFloat
     * @group unary
     * @group accessor
     * @group reductive
     *
     * @return boolean
     */
    public function asFloat(): bool;
}
