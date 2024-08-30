<?php

namespace App\Methods\Count;

/**
 * usage:
 * use \App\Methods\Count\CountIsAlwaysOne;
 */
trait CountIsAlwaysOne
{
    /**
     * Returns the number of the elements or items the object would produce from iteration.
     *
     * @implements \Countable::count
     * @group nonary
     * @group reductive
     *
     * @return integer The number of elements or items the object would produce from iteration.
     */
    final public function count(): int
    {
        return 1;
    }
}
