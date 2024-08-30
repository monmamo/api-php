<?php

namespace App\Concerns;

use App\Enums\Hosts;

trait DependsOnHost
{
    /**
     * @implements \App\Concerns\DependsOnHost::getHost
     * @group nonary
     */
    abstract protected function getHost(): Hosts;
}
