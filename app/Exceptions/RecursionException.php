<?php

namespace App\Exceptions;

use App\Enums\FontAwesomeIcons;

/**
 * An exception to throw when infinite recursion is detected.
 *
 * @see docs/groups/nonrecursion.md
 *
 *
 * @extends \Exception
 * @extends \LogicException
 * @implements \Throwable
 */
final class RecursionException extends \LogicException implements \Stringable
{
    /**
     * Constructor.
     *
     *
     * @extends \LogicException::__construct
     * @group binary
     * @group magic
     * @group mutator
     *
     * @param int $iteration_count Number of iterations that have already taken place.
     * @param \Throwable $previous Previous exception used for exception chaining.
     *
     * @uses \App\Stackframe::__construct
     * @uses \App\Stackframe::bookmarkString
     * @uses \debug_backtrace
     * @uses \error_log (native) Sends an error message to the defined error handling routines.
     * @uses \LogicException::__construct
     *
     * @return void
     */
    public function __construct(int $iteration_count = 1, ?\Throwable $previous = null)
    {
        $error_log_string = '';

        // foreach (debug_backtrace(\DEBUG_BACKTRACE_IGNORE_ARGS) as $frame_array) {
        // $frame = new Stackframe($frame_array);
        // $error_log_string .= \PHP_EOL . $frame->bookmarkString();
        // }

        parent::__construct("Recursion detected; aborted after {$iteration_count} iterations", 0, $previous);
    }

    /**
     * Returns a representation of this object as a string.
     *
     *
     * @group magic
     * @group magic-tostring-signature
     * @group nonary
     */
    public function __toString(): string
    {
        return 'RECURSION';
    }

    /**
     * @see https://fontawesome.com/icons/bug?s=solid
     *
     *
     * @implements \App\Interfaces\Properties\Icon::icon
     * @group html
     * @group variadic
     *
     * @param mixed[] $additional_styles Styles injected by the caller.
     */
    public function icon(...$additional_styles)
    {
        return FontAwesomeIcons::InfiniteRecursion->solid();
    }
}
