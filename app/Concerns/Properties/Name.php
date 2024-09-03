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
        $attributes = $reflection->getAttributes();

        foreach ($attributes as $attribute) {
            if ($attribute->getName() === \App\GeneralAttributes\Title::class) {
                return $attribute->getArguments()[0];
            }
        }

        return Str::title(class_basename($reflection->getName()));
    }
}
