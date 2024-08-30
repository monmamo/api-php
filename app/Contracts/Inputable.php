<?php

namespace App\Contracts;

interface Inputable
{
    /**
     * @extends \App\Contracts\Inputable::fieldValue
     * @group nonary
     */
    public function fieldValue(): string;
}
