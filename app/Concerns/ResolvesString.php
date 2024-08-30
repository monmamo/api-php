<?php

namespace App\Concerns;

trait ResolvesString
{
    /**
     * For debugging.
     */
    private readonly mixed $_chosen_resolver;

    /**
     * Resolves a value to a string, using the inner string if no value is given or the value is null.
     *
     * @implements \App\Concerns\ResolvesString::resolveString
     * @group unary
     * @group resolving
     */
    abstract protected function resolveString(mixed $value = null): string;

    /**
     * @group unary
     */
    protected function validateString(string $resulting_string): void {}
}
