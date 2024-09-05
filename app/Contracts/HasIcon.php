<?php

namespace App\Contracts;

use Illuminate\Contracts\Support\Renderable;

interface HasIcon
{
    public  function icon(): Renderable;
}
