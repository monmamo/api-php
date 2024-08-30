<?php

namespace App\Facades;

use App\Slug;

abstract class Model
{
    /**
     * @group unary
     *
     * @uses \App\Slug::of
     * @uses \App\Slug::toSnakeCase
     */
    public static function key(mixed $name): \Closure
    {
        $actual_name = Slug::of($name)->toSnakeCase();

        static $transformers = [];
        return $transformers[$actual_name] ??=
            /**
             * @uses \transform
             */
            static function (callable $callable) use ($actual_name) {
                return \transform($actual_name, $callable);
            };
    }
}
