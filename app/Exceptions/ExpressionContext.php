<?php

namespace App\Exceptions;

use App\Expression;
use App\Methods\ReportFromContext;

/**
 *
 */
trait ExpressionContext
{
    use ReportFromContext;

    /**
     *
     */
    private mixed $_value;

    /**
     *
     */
    public Expression $Expression;

    /**
     * Constructor.
     *
     *
     * @group magic
     * @group mutator
     * @group variadic
     *
     * @param array $additional_arguments
     *
     * @uses \__ (Laravel) Translates the message given to it.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \get_debug_type
     *
     * @return void
     */
    public function __construct(mixed $expression, mixed $value, ...$additional_arguments)
    {
        $this->Expression = $expression;
        $this->_value = $value;

        if (\count($additional_arguments) === 0) {
            $additional_arguments[] = \__('does not match :expression', ['expression' => $expression]) . ':' . ' ' . \get_debug_type($value);
        }
        parent::__construct(...$additional_arguments);
    }

    /**
     * Returns the exception's context information.
     *
     * While adding context to every log message can be useful, sometimes a particular exception may have unique context that you would like to include in your logs. By defining a context method on one of your application's custom exceptions, you may specify any data relevant to that exception that should be added to the exception's log entry.
     *
     * @see https://laravel.com/docs/9.x/errors#exception-log-context
     *
     *
     * @group nonary
     *
     * @return array
     */
    public function context()
    {
        return [
            'value' => $this->_value,
            'expression' => $this->Expression,
        ];
    }
}
