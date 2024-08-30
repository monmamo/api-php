<?php

namespace App\Facades;

use App\Enums\Hosts;
use Illuminate\Support\Facades\Facade;

final class Host extends Facade
{
    use EnumFacade;

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
        return Hosts::class;
    }

    /**
     * @group unary
     *
     * @uses \App\Enums\Hosts::environment
     * @uses \App\Facades\Environment::bind
     * @uses \Illuminate\Support\Facades\Facade::setFacadeApplication
     * @uses \Illuminate\Support\Facades\Facade::swap
     * @uses \is_callable (native) Returns whether a variable can be called as a function.
     * @uses \is_string (native) Returns whether a variable is a string.
     *
     * @throws \AssertionError
     */
    public static function bind($value): void
    {
        $host = match (true) {
            $value instanceof Hosts => $value,
            \is_string($value) => Hosts::$value,
            \is_callable($value) => $value(),
        };

        self::swap($host);

        Environment::setFacadeApplication(self::$app);
        Environment::bind($host->environment());
    }
}
