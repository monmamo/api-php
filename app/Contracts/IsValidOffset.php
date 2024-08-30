<?php

namespace App\Contracts;

interface IsValidOffset
{
    /**
     * @group nonary
     */
    public function asOffset(): string;
}
