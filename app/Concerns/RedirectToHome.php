<?php

namespace App\Concerns;

use App\Providers\RouteServiceProvider;

trait RedirectToHome
{
    /**
     * Where to redirect users after verification.
     */
    protected string $redirectTo = RouteServiceProvider::HOME;
}
