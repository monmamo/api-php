<?php

namespace App\CardTypes;

abstract class DroneType implements \App\CardType
{
    public static function background(): ?string
    {
        return null;
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
        yield 'While on the Battlefield, counts as a Flying Monster.';
        yield 'Cannot attack. Can use Dodge.';
    }

    public static function title(): string
    {
        return 'Drone';
    }
}
