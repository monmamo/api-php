<?php

namespace App\Concerns;



trait RedirectToHome
{
    /**
     * Where to redirect users after verification.
     */
    protected string $redirectTo = '/';
}
