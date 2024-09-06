<?php

namespace App\Concerns\Properties;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

trait Name
{
    /**
     * @implements \App\Contracts\HasName
     */
    public function name(): string
    {

        $reflection = new \ReflectionClass($this);
        $attributes = $reflection->getAttributes(\App\GeneralAttributes\Title::class);

        if (count($attributes) > 0) {
            return $attributes[0]->getArguments()[0];
        }


        return Str::title(class_basename($reflection->getName()));
    }
}
