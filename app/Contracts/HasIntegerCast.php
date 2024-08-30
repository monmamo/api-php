<?php

namespace App\Contracts;

interface HasIntegerCast
{
    /**
     * @implements \App\Contracts\HasIntegerCast::asInteger
     * @group unary
     * @group accessor
     * @group reductive
     *
     * @return boolean
     */
    public function asInteger(): bool;
}
