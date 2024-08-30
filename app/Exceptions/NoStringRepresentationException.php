<?php

namespace App\Exceptions;

use App\Facades\Context;

/**
 *
 */
class NoStringRepresentationException extends \LogicException
{
    /**
     * Constructor.
     *
     *
     * @group magic
     * @group mutator
     * @group trinary
     *
     * @uses \__ (Laravel) Translates the message given to it.
     * @uses \Exception::__construct
     * @uses \get_debug_type (native) Returns the type of a variable, with special handling for objects.
     * @uses \sprintf (native) Returns a formatted string.
     *
     * @return void
     */
    public function __construct(private readonly mixed $source)
    {
        parent::__construct(\sprintf(\__('no-string-representation'), \get_debug_type($source)));
    }

    /**
     * Returns any data relevant to that exception that should be added to the exception's log entry.
     *
     * @see https://laravel.com/docs/10.x/errors#exception-log-context
     *
     *
     * @group nonary
     *
     * @uses \App\Facades\Context::all
     * @uses \App\Strings\gloss
     * @uses \App\Strings\valueRepresentation
     * @uses \is_object (native) Returns whether a variable is an object.
     */
    public function context(): array
    {
        $data = Context::all();
        $value = $this->source;
        $type = \App\Strings\valueRepresentation(value: $this->source, verbose: true);
        $gloss = match (true) {
            \is_object($this->source) => \App\Strings\gloss($this->source),
            default => null
        };

        $data['source'] = \compact('value', 'type', 'gloss');
        return $data;
    }
}
