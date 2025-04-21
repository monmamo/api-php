<?php

namespace App\Contracts;

/**
 * Our generalization of the \Illuminate\Support\Optional class.
 *
 * Don't extend \Stringable or \ArrayAccess. Consumers of Optional items should test for matches.
 * Don't extend \App\Contracts\Normalizable.
 */
interface Optional // extends Deferable, Dumps, Emptyable, Filterable, Foldable, HasProperties, Mappable,  TransformativeInvoker
{
    /**
     * Returns this option if non-empty, or the passed option otherwise.
     *
     * These are the only possible return values:
     * - $this // if $this instanceof \App\Contracts\Optional
     * - \App\Options\wrap($this)
     * - $else
     *
     * This can be used to try multiple alternatives, and is especially useful with lazy evaluating options:
     *
     * ```php
     *     $repo->findSomething()
     *         ->orElse(lazy option(array($repo, 'findSomethingElse')))
     *         ->orElse(lazy option(array($repo, 'createSomething')));
     * ```
     *
     * @implements \App\Contracts\Optional::orElse
     * @group unary
     */
    public function orElse(self $else): self;
}
