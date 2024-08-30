<?php

namespace App\Contracts;

use Illuminate\Contracts\Auth\Guard;

interface MakesGuard
{
    public function makeGuardObject(): Guard;
}
