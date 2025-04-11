<?php

namespace App\Concerns;

trait Reflection
{
    private readonly \ReflectionClass $_reflection;

    /**
     * @group nonary
     */
    protected function reflection(): \ReflectionClass
    {
        return $this->_reflection ?? new \ReflectionClass($this);
    }

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

    /**
     * @group unary
     */
    public function getAttributes(string $class): array
    {
        return $this->reflection()->getAttributes($class);
    }

    /**
     * @group unary
     */
    public function hasAttribute(string $class): bool
    {
        return \count($this->getAttributes($class)) > 0;
    }
}
