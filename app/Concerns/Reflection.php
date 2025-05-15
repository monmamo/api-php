<?php

namespace App\Concerns;

trait Reflection
{
    private readonly \ReflectionClass $_reflection;

    /**
     * @group binary
     *
     * @param null|mixed $callback
     */
    protected function withAttribute(string $class, $callback = null)
    {
        $attributes = $this->reflection()->getAttributes($class);

        if (\count($attributes) > 0) {
            $instance = $attributes[0]->newInstance();
            return \is_null($callback) ? $instance : $callback($instance);
        }
    }
}
