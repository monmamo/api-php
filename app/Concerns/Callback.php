<?php

namespace App\Concerns;

trait Callback
{
    /**
     * The callable associated for the object.
     *
     * @var callable
     */
    private $callback;

    /**
     * Retrieves the callback.
     *
     * @group nonary
     * @group accessor
     *
     * @uses \App\Options\wrap
     */
    public function getCallback(): \Closure
    {
        return \Closure::fromCallable($this->callback ?? \App\Options\wrap(...));
    }

    /**
     * Returns whether a callable is set.
     *
     * @group nonary
     * @group accessor
     *
     * @uses \is_null (native) Returns whether a variable is null.
     */
    public function hasCallback(): bool
    {
        return isset($this->callback) && !\is_null($this->callback);
    }

    /**
     * Invokes the callable for the object.
     *
     * 💢 Can't declare this as mixed because it could return null.
     *
     * @group variadic
     *
     * @uses \App\Concerns\Callback::getCallback
     */
    public function invokeCallback(...$arguments)
    {
        return ($this->getCallback())(...$arguments);
    }

    /**
     * Sets the callable for the object.
     *
     * @group unary
     * @group mutator
     * @group fluent
     */
    public function setCallback(callable $callback): self
    {
        $this->callback = $callback;

        return $this;
    }
}
