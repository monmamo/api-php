<?php

namespace App\Contracts;

interface HasLogString
{
    /**
     * @implements \App\Contracts\HasLogString::logString
     * @group nonary
     */
    public function logString(): string;
}
