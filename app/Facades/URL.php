<?php

namespace App\Facades;

use App\Slug;
use Illuminate\Routing\Exceptions\UrlGenerationException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

final class URL extends \Illuminate\Support\Facades\URL
{
    /**
     * Returns the "index" route for a section.
     *
     * @group unary
     *
     * @uses \App\Facades\URL::route Returns the URL to a named route. Dumps and throws.
     * @uses \App\Slug::makeRouteName
     */
    public static function indexRoute(mixed $section): string
    {
        return self::route(Slug::makeRouteName($section, 'index'));
    }

    /**
     * Returns the URL to a named route.
     *
     * @extends \Illuminate\Routing\UrlGenerator::route
     *
     * @uses \App\Dumping\dumpLabeled
     * @uses \App\Strings\unwrap
     * @uses \Illuminate\Contracts\Routing\UrlGenerator::route
     * @uses \Illuminate\Support\Facades\URL::getFacadeRoot
     * @uses \rtrim (native) Strips whitespace (or other characters) from the end of a string.
     *
     * @return string
     * @throws \Symfony\Component\Routing\Exception\RouteNotFoundException
     * @throws Illuminate\Routing\Exceptions\UrlGenerationException
     */
    public static function route(mixed $name, mixed $parameters = [], bool $absolute = true)
    {
        try {
            return \rtrim(self::getFacadeRoot()->route(\App\Strings\unwrap($name), $parameters, $absolute));
        } catch (UrlGenerationException $exception) {
            \App\Dumping\dumpLabeled(\compact('name', 'parameters', 'exception')); // 🔒
            throw $exception;
        } catch (RouteNotFoundException $exception) {
            throw $exception;
        }
    }
}
