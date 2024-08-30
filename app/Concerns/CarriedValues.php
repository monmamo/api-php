<?php

namespace App\Concerns;

/**
 * usage:
 * use \App\Concerns\CarriedValues;
 * $this->setCarriedValues([VALUES]);
 */
trait CarriedValues
{
    private mixed $_values;

    /**
     * @group unary
     *
     * @param mixed[] $values
     *
     * @uses \array_merge (native) Merges one or more arrays.
     */
    protected function addCarriedValues(array $values): void
    {
        $this->_values = \array_merge($this->_values ?? [], $values);
    }

    /**
     * @group variadic
     * @group mutator
     *
     * @param mixed[] $values
     */
    protected function setCarriedValues(array $values): void
    {
        $this->_values = $values;
    }

    /**
     * Yields the values that this object is carrying as label-value pairs.
     *
     * @implements \App\Interfaces\Properties\CarriedValues::carriedValues
     * @group accessor
     * @group nonary
     *
     * @uses \ArrayIterator::__construct
     */
    public function carriedValues(): \Traversable
    {
        return new \ArrayIterator($this->_values);
    }
}
