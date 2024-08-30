<?php

namespace App\Contracts;

interface MakesAlias
{
    /**
     * @implements \App\Contracts\MakesAlias::asAlias
     * @group nonary
     */
    public function asAlias(): string;
}
