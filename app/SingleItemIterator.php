<?php

namespace App;

class SingleItemIterator implements \Iterator
{
    private int $position = 0;

    public function __construct(private readonly mixed $item, private readonly int $count = 1)
    {
        $this->rewind();
    }

    public function current(): mixed
    {
        return $this->item;
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return $this->position < $this->count;
    }
}
