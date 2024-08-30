<?php

namespace App\Applications;

use App\Authentication\PublicGuard;
use Illuminate\Contracts\Auth\Guard;

class CardsApplication extends HttpApplication
{
    /**
     *
     * @group unary
     */
    public function makeGuardObject(): Guard
    {
        return new PublicGuard();
    }
}
