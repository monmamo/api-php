<?php

namespace App\Concerns;

use App\Contracts\HasSettableContext;

/**
 * usage:
 * use \App\Concerns\MultivalueContext;
 * use \App\Concerns\PipelineFunctionality;
 * use \App\Concerns\Runner;
 */
trait Runner
{
    public array $transforms;

    /**
     * @group variadic
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \App\Contracts\HasSettableContext::setInternalContextPoint
     *
     * @throws \AssertionError
     */
    protected function setCallables(array $callables): void
    {
        \assert(\count($callables) > 0);
        $this->transforms = $callables;

        if ($this instanceof HasSettableContext) {
            $this->setInternalContextPoint('callables', $callables);
        }
    }
}
