<?php

namespace App\Methods;

use App\Facades\Handler;

/**
 * Implements methods for reading files.
 */
trait ReadsFiles
{
    /**
     * Given a path to a file, yields the function name derived from the path and the result of requiring the file.
     *
     * @group unary
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \is_string (native) Returns whether a variable is a string.
     * @uses \pathinfo (native) Returns information about a file path.
     *
     * @throws \AssertionError
     */
    protected function filenameToArguments(string $path): \Traversable
    {
        $function_name = \pathinfo($path, \PATHINFO_FILENAME);
        \assert(
            \is_string($function_name),
            'function name not a string',
        );
        // if ($function_name === '') continue;
        yield $function_name;
        yield require_once $path;
    }

    /**
     * Given a source path and a list of actions, loads the files in the source path and applies the actions to each file.
     *
     * @group variadic
     *
     * @param \Closure ...$actions
     *
     * @uses \App\Facades\Handler::tryActionOnFilename
     * @uses \App\Strings\unwrap
     * @uses \glob (native) Find pathnames matching a pattern.
     * @uses \is_callable (native) Returns whether a variable can be called as a function.
     * @uses \is_object (native) Returns whether a variable is an object.
     *
     * @throws \Throwable Any exception thrown by any called method.
     */
    protected function loadFiles(string $source, ...$actions): void
    {
        foreach (\glob($source) as $filename) {
            foreach ($actions as $action) {
                Handler::tryActionOnFilename(
                    match (true) {
                        $action instanceof \Closure,
                        \is_object($action) && \is_callable($action) => $action,
                        default => $this->staticAction(class: \App\Strings\unwrap($action)),
                    },
                    $filename,
                );
            }
        }
    }

    /**
     * Given a class name and a method name, returns a closure that calls the method on the class with the filename as the first argument.
     *
     * @group binary
     */
    protected function staticAction(string $class, string $method = 'macro'): \Closure
    {
        return fn ($filename) => $class::$method(...$this->filenameToArguments($filename));
    }
}
