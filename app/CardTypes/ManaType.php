<?php

namespace App\CardTypes;

abstract class ManaType implements \App\CardType
{
    public static function background(): ?string
    {
        return null;
        //         return
        // <<<SVG
        // SVG;
    }

    public static function color(): string|array
    {
        return 'black';
    }

    public static function icon():\Illuminate\Contracts\Support\Renderable{
        return new class implements \Illuminate\Contracts\Support\Renderable{
            public function render(){
        return null;
        // <<<SVG
        // SVG;
    }};}

    public static function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }

    public static function title(): string
    {
        return 'Mana';
    }
}
