<?php

namespace App\Facades;

use App\Contracts\Optional;

/**
 * Facade for making strings.
 *
 * @deprecated Use \App\Strings functions instead.
 */
abstract class Stringable
{
    /**
     * Method invoked when attempting invoke an inaccessible or undefined method of this class in a static context.
     *
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @param string $name Name of the method being called.
     * @param mixed[] $arguments Enumerated array containing the parameters passed to the method.
     *
     * @uses \is_private
     * @uses UndeclaredPrivatePropertyException::__construct
     *
     * @return mixed (usually self)
     */
    public static function __callStatic(string $name, array $arguments)
    {
        // assert(!is_private($name),new UndeclaredPrivatePropertyException($name));

        return fn ($value, ...$additional_arguments) => $name(\App\Strings\unwrap($value), ...$additional_arguments);
    }

    /**
     * @deprecated
     *
     * @uses \__ (Laravel) Translates the message given to it.
     * @uses \App\Facades\Handler::glowWarning
     * @uses \get_debug_type (native) Returns the type of a variable, with special handling for objects.
     * @uses \is_null (native) Returns whether a variable is null.
     * @uses \is_numeric (native) Returns whether or not a variable is a number or a numeric string.
     * @uses \is_string (native) Returns whether a variable is a string.
     * @uses \LogicException::__construct
     * @uses \sprintf (native) Returns a formatted string.
     * @uses \Stringable::__toString
     * @uses \value (Laravel) If given a Closure, evaluates it; otherwise returns the value given.
     *
     * @throws \LogicException
     */
    public static function unwrap(mixed $source): string
    {
        return \App\Strings\unwrap($source);
    }

    /**
     * @deprecated
     */
    public static function valueRepresentation(mixed $value): string
    {
        return \App\Strings\valueRepresentation(value: $value, verbose: true);
    }

    /**
     * @deprecated
     */
    public static function wrap(string $source): Optional
    {
        return \App\Strings\wrap($source);
    }
}
