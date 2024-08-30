<?php

namespace App\Contracts;

interface HasSelector
{
    /**
     * @implements \App\Contracts\HasSelector::selector
     * @group nonary
     */
    public function selector(): string;
}
