<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;

interface OperatesOnEntity
{
    /**
     * @implements \App\Contracts\OperatesOnEntity::withEntity
     * @group unary
     */
    public function withEntity(Model $entity): mixed;
}
