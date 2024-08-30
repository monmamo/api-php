<?php

namespace App\Methods;

use App\Callables\IdResolver;

trait FindStatic
{
    /**
     * Finds a model by its primary key.
     *
     * Patterned after Illuminate\Database\Eloquent\Model::find.
     *
     * @group unary
     *
     * @uses \value (Laravel) If given a Closure, evaluates it; otherwise returns the value given.
     *
     * @return null|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static|static[]
     */
    public static function find(mixed $id)
    {
        static $matcher = [];
        $matcher[static::class] ??= new IdResolver(static::class);
        return $matcher[static::class]($id);
    }
}
