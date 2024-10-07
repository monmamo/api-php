<?php

namespace App\Facades;

class Blade extends \Illuminate\Support\Facades\Blade
{
    /**
     * @group sugar
     * @group variadic
     */
    public function renderHtml(...$pieces): string
    {
        return self::render(\App\Strings\html(...$pieces)->toHtml());
    }
}
