<?php

namespace App\Methods;

trait Extend
{
    /**
     * Produces a new slug by extending this slug with any number of additional pieces.
     *
     * @group variadic
     * @group factory
     *
     * @param mixed[] $extensions
     *
     * @uses \App\Slug::concat
     * @uses \App\Slug::of
     */
    public function extend(...$extensions): self
    {
        return self::of(...$this->concat($extensions));
    }
}
