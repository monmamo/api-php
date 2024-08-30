<?php

namespace App\Concerns;

trait Metadata
{
    /**
     * ❗ If a data point specifically needs to return null, return.
     *
     * @group variadic
     *
     * @uses \App\Strings\cat
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \class_basename (Laravel) Returns the class basename of the given object or class.
     * @uses \config (Laravel)
     * @uses \is_null (native) Returns whether a variable is null.
     *
     * @throws \AssertionError
     */
    public function config(...$pieces): mixed
    {
        static $concatenator;
        $concatenator ??= \App\Strings\cat(glue: '.');
        $slug = $concatenator(\class_basename($this), $this->name, ...$pieces);
        $result = \config($slug);
        \assert(!\is_null($result), 'missing configuration point: ' . $slug);
        return $result;
    }

    /**
     * @group unary
     *
     * @uses \__ (Laravel) Translates the message given to it.
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \class_basename (Laravel) Returns the class basename of the given object or class.
     * @uses \sprintf (native) Returns a formatted string.
     * @uses \str_starts_with (native) Returns whether the haystack string begins with the given needle.
     *
     * @throws \AssertionError
     */
    public function translate(mixed $slug): string
    {
        $result = \__(\sprintf(
            '%s.%s.%s',
            \class_basename($this),
            $this->name,
            $slug,
        ));

        \assert(
            !\str_starts_with(
                \class_basename($this),
                'missing language point: ' . $result,
            ),
        );

        return $result;
    }
}
