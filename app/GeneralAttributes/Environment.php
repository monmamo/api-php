<?php

namespace App\GeneralAttributes;

use App\Enums\Environments;

#[\Attribute(\Attribute::TARGET_ALL)]
class Environment
{
    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group unary
     *
     * @return void
     */
    public function __construct(
        public Environments $environment,
    ) {}
}
