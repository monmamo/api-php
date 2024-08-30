<?php

namespace App\Strings;

use App\Facades\Handler;

final class ClassBasename extends PascalCaseString
{
    /**
     * @group magic
     * @group mutator
     * @group unary
     *
     * @uses \App\Facades\Handler::logError
     * @uses \App\Strings\PascalCaseString::__construct
     * @uses \App\Strings\trim
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \basename (native) Returns trailing name component of path.
     * @uses \class_exists (native) Checks whether a string is the fully-qualified name of a defined class.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \implode (native) Concatenates elements of an array into a string.
     * @uses \is_numeric (native) Returns whether or not a variable is a number or a numeric string.
     * @uses \is_object (native) Returns whether a variable is an object.
     * @uses \is_string (native) Returns whether a variable is a string.
     * @uses \str_contains (native) Returns whether the haystack string contains the given needle.
     * @uses \str_replace (native) Replaces all occurrences of the search string with the replacement string.
     * @uses \trim (native) Strips whitespace from the beginning and end of a string.
     *
     * @throws \AssertionError
     */
    public function for(string $classname, string $suffix_to_remove = ''): void
    {
        $classname = \trim($classname);

        try {
            \assert($classname !== '');
        } catch (\AssertionError $exception) {
            Handler::logError(
                'class name empty',
                \compact('classname', 'suffix_to_remove'),
            );
            throw $exception;
        }

        if (\class_exists($classname)) {
            $result = \basename(\str_replace(Stringable::BACKSLASH, '/', $classname));
            $result = \App\Strings\trim(
                suffix: $suffix_to_remove,
                source: $result,
            );
        } else {
            $result = $classname;
        }

        try {
            \assert(\is_string($result));
            \assert(\trim($result) !== '');
        } catch (\AssertionError $exception) {
            Handler::logError(
                'result empty',
                \compact('classname', 'suffix_to_remove'),
            );
            throw $exception;
        }

        try {
            \assert(!\str_contains($result, Stringable::BACKSLASH));
        } catch (\AssertionError $exception) {
            Handler::logError(
                'string contains backslash',
                \compact('classname', 'suffix_to_remove', 'result'),
            );
            throw $exception;
        }

        parent::__construct($result);

        try {
            \assert($this->test('/^[A-Za-z0-9]+$/'));
        } catch (\AssertionError $exception) {
            Handler::logError(
                'improper format',
                \compact('classname', 'suffix_to_remove', 'result'),
            );
            throw $exception;
        }
    }
}
