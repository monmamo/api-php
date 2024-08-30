<?php

namespace App\Contracts;

/**
 * Interface for yielding a set of context information about an object.
 */
interface HasSettableContext extends HasContext
{
    /**
     * @implements \App\Contracts\HasSettableContext::setContext
     * @group mutator
     * @group unary
     * @group fluent
     */
    public function setContext(array $context): self;

    /**
     * Sets the corresponding data value at the offset.
     *
     * @implements \App\Contracts\HasSettableContext::setContextPoint
     * @group binary
     * @group mutator
     * @group fluent
     *
     * @param mixed $offset Offset to set.
     * @param mixed $value New value.
     */
    public function setContextPoint(mixed $offset, mixed $value): self;

    /**
     * Sets the corresponding data value at the offset.
     *
     * @group binary
     * @group mutator
     *
     * @param mixed $offset Offset to set.
     * @param mixed $value New value.
     */
    public function setInternalContextPoint(mixed $offset, mixed $value): void;
}
