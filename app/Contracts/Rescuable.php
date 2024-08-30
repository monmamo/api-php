<?php

namespace App\Contracts;

interface Rescuable
{
    /**
     * @implements \App\Contracts\Rescuable::rescue
     * @group unary
     */
    public function rescue(\Throwable $exception);
}
