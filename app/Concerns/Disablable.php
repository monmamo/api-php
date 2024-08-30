<?php

namespace App\Concerns;

/**
 * usage:
 * use App\Concerns\Disablable;
 */
trait Disablable
{
    private bool $_enabled = true;

    /**
     * @group nonary
     * @group accessor
     */
    protected function enabled(): bool
    {
        return $this->_enabled;
    }

    /**
     * @group nonary
     * @group mutator
     */
    public function disable(): void
    {
        $this->_enabled = false;
    }

    /**
     * @group nonary
     * @group mutator
     */
    public function enable(): void
    {
        $this->_enabled = true;
    }

    /**
     * @group unary
     * @group mutator
     *
     * @uses \App\Contracts\HasValue::get
     * @uses \App\Options\castBoolean
     */
    public function enableOrDisable(mixed $condition): void
    {
        $this->_enabled = (bool) \App\Options\castBoolean($condition)->get();
    }
}
