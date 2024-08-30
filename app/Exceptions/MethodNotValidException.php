<?php

namespace App\Exceptions;

/**
 * An exception indicating that a method was not implemented.
 *
 *
 * @extends \BadMethodCallException
 * @extends \Exception
 * @extends \LogicException
 * @implements \Throwable
 */
final class MethodNotValidException extends \BadMethodCallException
{
    /**
     * Constructor.
     *
     *
     * @group binary
     * @group magic
     * @group mutator
     *
     * @uses \App\Dumping\dump
     * @uses \array_slice (native)
     * @uses \BadMethodCallException::__construct
     * @uses \debug_backtrace (native) Generates and returns a backtrace from the current point of execution.
     * @uses \get_class (native) Returns the name of the class of an object.
     * @uses \get_debug_type (native) Returns the type of a variable, with special handling for objects.
     * @uses \is_object (native)
     * @uses \is_string (native)
     * @uses \sprintf (native) Returns a formatted string.
     */
    public function __construct(mixed $source, ?string $method = null)
    {
        $stackframe = \array_slice(\debug_backtrace(\DEBUG_BACKTRACE_IGNORE_ARGS), 1)[0];

        parent::__construct(\sprintf(
            "method '%s' not valid or applicable for %s",
            $method ?? $stackframe['function'],
            match (true) {
                \is_object($source) => 'object of class ' . \get_class($source), // in case class is anonymous
                \is_string($source) => 'class ' . $source,
                default => \get_debug_type($source)
            },
        ));

        \App\Dumping\dump($source, $method); // 🔒
    }
}
