<?php

namespace App\Reflection;

/**
 * @group binary
 *
 * @param null|mixed $callback
 */
function withAttribute(object $source, string $class, $callback = null)
{
    $reflection = new \ReflectionClass($source);
    $attributes = $reflection->getAttributes($class);

    if (\count($attributes) > 0) {
        $instance = $attributes[0]->newInstance();
        return \is_null($callback) ? $instance : $callback($instance);
    }
}
/**
 * @group unary
 */
function getAttributes(object $source, string $class): array
{
    $reflection = new \ReflectionClass($source);
    return $reflection->getAttributes($class);
}

/**
 * @group unary
 */
function hasAttribute(object $source, string $class): bool
{
    return \count(getAttributes($source, $class)) > 0;
}
