<?php

namespace App\Facades;

class Blade extends \Illuminate\Support\Facades\Blade
{
    public static function deferRender(string $markup, array $data = []): \Closure
    {
        return fn () => self::render($markup, $data);
    }

    /**
     * @group sugar
     * @group variadic
     */
    public function renderHtml(...$pieces): string
    {
        return self::render(\App\Strings\html(...$pieces)->toHtml());
    }
}
