<?php

namespace App\Exceptions;

use App\Concerns\MultivalueContext;

/**
 * User MUST implement App\Contracts\HasContext.
 *
 *
 */
trait SimpleMultivalueContext
{
    use MultivalueContext;

    /**
     * Constructor.
     *
     *
     * @group binary
     * @group magic
     * @group mutator
     *
     * @param \Throwable $previous Previous exception used for exception chaining.
     *
     * @uses \App\Concerns\MultivalueContext::setContext
     * @uses parent::__construct
     * @uses \Throwable::getMessage
     *
     * @return void
     */
    public function __construct(array $context, string $verb, \Throwable $previous)
    {
        $this->setContext($context);
        parent::__construct("exception {$verb}: " . $previous->getMessage(), 0, $previous);
    }
}
