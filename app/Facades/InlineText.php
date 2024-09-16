<?php

namespace App\Facades;

use App\Concerns\NonsingularFunctionality;

/**
 * tapwrap: (string) (new \App\Strings\InlineText(VALUE))->map(CALLABE);.
 */
abstract class InlineText
{
    use NonsingularFunctionality;

    /**
     * Returns the registered name of the component.
     *
     * @extends \Illuminate\Support\Facades\Facade::getFacadeAccessor
     * @group nonary
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \App\Strings\InlineText::class;
    }
}
