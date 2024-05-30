<?php

namespace App\GeneralAttributes;

/**
 *
 */
#[\Attribute(\Attribute::TARGET_ALL | \Attribute::IS_REPEATABLE)]
class Comment
{
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
    public function __construct(
        public string $comment,
    ) {
    }
}