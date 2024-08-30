<?php

namespace App\Contracts;

interface HasBooleanCast
{
    /**
     * @implements \App\Contracts\HasBooleanCast::asBoolean
     * @group unary
     * @group accessor
     * @group reductive
     *
     * @return boolean
     */
    public function asBoolean(): bool;
}
