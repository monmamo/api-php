<?php

namespace App\Exceptions;

/**
 *
 */
class PipelineBreak extends \Exception
{
    /**
     * Constructor.
     *
     *
     * @group magic
     * @group mutator
     * @group trinary
     *
     * @uses \Exception::__construct
     *
     * @return void
     */
    public function __construct($message = 'Pipeline break', $code = 0)
    {
        parent::__construct($message, $code);
    }
}
