<?php

namespace App;

class DistributionArray extends \ArrayObject
{
    private readonly float $_sum;

    public function __construct(array $input = [], int $flags = 0, string $iterator_class = 'ArrayIterator')
    {
        $this->_sum = \array_sum($input);
        parent::__construct($input, $flags, $iterator_class);
    }

    public function offsetGet(mixed $index): mixed
    {
        return parent::offsetGet($index) / $this->_sum;
    }
}
