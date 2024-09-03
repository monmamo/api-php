<?php

namespace App\CardTypes;

abstract class SetupType implements \App\CardType
{
    /**
     * 512x512 original.
     */
    public static function icon():\Illuminate\Contracts\Support\Renderable{
        return new class implements \Illuminate\Contracts\Support\Renderable{
            public function render(){
        return null;
    }};}

    public static function standardRule(): \Traversable
    {
        yield 'Can be played only during the Setup phase.';
    }
}
