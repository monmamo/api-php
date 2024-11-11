<?php

namespace App\Concerns;

trait HasClassAttributes
{
    public static function classAttribute(string $fqn)
    {
        static $class_attributes = [];
        $class_attributes[static::class] ??= new \ReflectionClass(static::class);
        $attributes = $class_attributes[static::class]->getAttributes($fqn);

        if (\count($attributes) === 0) {
            return;
        }
        return $attributes[0]->newInstance();
    }
}
