<?php

namespace App\Facades;

use App\Applications\BaseApplication;

final class App extends \Illuminate\Support\Facades\App
{
    /**
     * Handles dynamic, static calls to the object.
     *
     * @extends \Illuminate\Support\Facades\App::__callStatic
     *
     * @param string $method
     * @param array $args
     *
     * @uses \App\Callables\runObjectMethod
     * @uses \get_class (native) Returns the name of the class of an object.
     * @uses \RuntimeException::__construct
     * @uses \sprintf (native) Returns a formatted string.
     *
     * @throws \BadMethodCallException from \App\Callables\runObjectMethod
     * @throws \RuntimeException
     */
    public static function __callStatic($method, $args)
    {
        $instance = self::getFacadeRoot();

        if (!$instance) {
            throw new \RuntimeException('a facade root has not been set');
        }

        if (!($instance instanceof BaseApplication)) {
            throw new \RuntimeException(\sprintf('the facade root (%s) is not one of our applications', \get_class($instance)));
        }

        return \App\Callables\runObjectMethod($instance, $method, $args);
    }

    /**
     * @group nonary
     *
     * @uses \Illuminate\Support\Facades\App::getLocale
     * @uses \str_replace (native) Replaces all occurrences of the search string with the replacement string.
     */
    public static function getLocaleForHtmlTag(): string
    {
        return \str_replace(Stringable::UNDERSCORE, '-', self::getLocale());
    }
}
