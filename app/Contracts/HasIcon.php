<?php

namespace App\Contracts;

use Illuminate\Contracts\Support\Renderable;

interface HasIcon
{
    public static function icon(): Renderable;
}
