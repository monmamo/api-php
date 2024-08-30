<?php

namespace App\Methods;

trait GenericCallStatic
{
    /**
     * Method invoked when attempting invoke an inaccessible or undefined method of this class in a static context.
     *
     * Handles dynamic static method calls into the class.
     *
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @param string $name Method being called.
     * @param mixed[] $parameters Enumerated array containing the parameters passed to the method.
     *
     * @uses self::__construct
     * @uses self::__call
     *
     * @return self
     */
    public static function __callStatic(string $name, array $parameters)
    {
        $result = (new static())->$name(...$parameters);

        return $result;
    }
}
