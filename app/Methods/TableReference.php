<?php

namespace App\Methods;

use Illuminate\Database\Eloquent\Model;

/**
 * A trait that implements functionality representing a reference to a database table.
 */
trait TableReference
{
    /**
     * Returns the appopriate model for the table reference.
     *
     * @implements \App\Methods\TableReference::modelForTableReference
     * @group nonary
     *
     * @return Illuminate\Database\Eloquent\Model
     */
    abstract protected function modelForTableReference(): Model;

    /**
     * @group caching
     * @group nonary
     *
     * @uses \App\Methods\TableReference::modelForTableReference
     * @uses \App\TableReference::__construct
     */
    public function tableReference(): \App\TableReference
    {
        return new \App\TableReference($this->modelForTableReference());
    }
}
