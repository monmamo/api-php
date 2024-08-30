<?php

namespace App\Concerns\Optional;

use App\Constraints\Equals;
use App\Constraints\NotEquals;
use App\Contracts\Optional;

/**
 * usage:
 * use \App\Concerns\Optional\SelectThroughFilter; // defines ::select and ::reject
 */
trait SelectThroughFilter
{
    /**
     * Lets all values through except the passed value.
     *
     * @implements \App\Contracts\Filterable::reject
     * @group unary
     *
     * @param T $standard Standard for comparison.
     *
     * @uses \App\Constraints\NotEquals::__construct
     */
    public function reject(mixed $standard): Optional
    {
        return $this->filter(new NotEquals($standard));
    }

    /**
     * If the option is empty, it is returned immediately.
     *
     * If the option is non-empty, and its value does not equal the passed value (via a shallow comparison ===), then None is returned. Otherwise, the Option is returned.
     *
     * In other words, this will filter all but the passed value.
     *
     * @implements \App\Contracts\Filterable::select
     * @group unary
     *
     * @param T $standard Standard for comparison.
     *
     * @uses \App\Constraints\Equals::__construct
     */
    public function select(mixed $standard): Optional
    {
        return $this->filter(new Equals($standard));
    }
}
