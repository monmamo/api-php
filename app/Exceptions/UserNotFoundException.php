<?php

namespace App\Exceptions;

use App\Concerns\MultivalueContext;
use App\Contracts\HasContext;

/**
 *
 */
final class UserNotFoundException extends \LogicException implements HasContext
{
    use MultivalueContext;

    /**
     * Constructor.
     *
     *
     * @group magic
     * @group mutator
     * @group unary
     *
     * @return void
     */
    public function __construct(array $context = [])
    {
        $this->setContext($context);
        parent::__construct('unable to retrieve user by credentials');
    }
}
