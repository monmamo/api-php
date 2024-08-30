<?php

namespace App\Facades;

use App\Slug;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

final class Request extends \Illuminate\Support\Facades\Request
{
    /**
     * Determines and returns whether this section is the current section.
     *
     * @group accessor
     * @group nonary
     *
     * @uses \App\Enums\Sections::slug
     * @uses \App\Strings\expectationMessage
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \Illuminate\Http\Request::route
     * @uses \Illuminate\Support\Optional::__call
     * @uses \is_null
     * @uses \request (Laravel) Gets an instance of the current request or an input item from the request.
     *
     * @throws \AssertionError
     */
    public static function section(): ?string
    {
        if (\is_null($route = self::route())) {
            return null;
        }
        \assert(
            $route instanceof \Illuminate\Routing\Route,
            \App\Strings\expectationMessage(
                expectation: \Illuminate\Routing\Route::class,
                value: $route,
            ),
        );

        return self::sectionFromUri($route->uri());
    }

    /**
     * @group unary
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \Illuminate\Support\Str::isMatch (Laravel) Determine if a given string matches a given pattern.
     * @uses \is_null (native) Returns whether a variable is null.
     * @uses \json_encode (native) Returns the JSON representation of a value.
     * @uses \str_contains (native) Returns whether the haystack string contains the given needle.
     * @uses \str_starts_with (native) Returns whether the haystack string begins with the given needle.
     * @uses \strpos (native) Returns the position of the first occurrence of a substring in a string.
     * @uses \substr (native) Returns part of a string.
     */
    public static function sectionFromUri(?string $uri): ?string
    {
        if (\is_null($uri)) {
            return null;
        }

        if ($uri === '/') {
            return null;
        }

        if (\str_starts_with($uri, '/')) {
            $uri = \substr($uri, 1);
        }

        if (\str_contains($uri, '?')) {
            $uri = \substr($uri, 0, \strpos($uri, '?'));
        }

        if (\str_contains($uri, '/')) {
            $uri = \substr($uri, 0, \strpos($uri, '/'));
        }

        \assert(Str::isMatch('/^[a-z-_]*$/', $uri), \json_encode($uri)); // could be empty
        return $uri;
    }
}
