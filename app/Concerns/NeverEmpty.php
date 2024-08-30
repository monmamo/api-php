<?php

namespace App\Concerns;

/**
 * usage:
 * use \App\Concerns\NeverEmpty;
 */
trait NeverEmpty
{
    /**
     * Returns whether this collection or container is empty.
     *
     * Could also return true if no value is available, false otherwise.
     *
     * 💢 Can't be declared as boolean because \Illuminate\Support\Optional::isEmpty and  \PhpOption\Option::isEmpty are not type-declared.
     *
     * @implements \App\Contracts\Emptyable::isEmpty
     * @implements \Illuminate\Support\Optional::isEmpty
     * @group nonary
     * @group reductive
     *
     * @return boolean
     */
    final public function isEmpty()
    {
        return false;
    }

    /**
     * Returns whether this collection or container is not empty.
     *
     * Could also return false if no value is available, true otherwise.
     *
     * 💢 Can't be declared as boolean because \Illuminate\Support\Optional::isNotEmpty and  \PhpOption\Option::isNotEmpty are not type-declared.
     *
     * @implements \App\Contracts\Emptyable::isNotEmpty
     * @implements \Illuminate\Support\Optional::isNotEmpty
     * @group nonary
     * @group reductive
     *
     * @return boolean
     */
    public function isNotEmpty()
    {
        return true;
    }
}
