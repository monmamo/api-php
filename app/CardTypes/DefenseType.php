<?php

namespace App\CardTypes;

abstract class DefenseType implements \App\CardType
{
    use \App\Concerns\Formatting;

    public static function background(): ?string
    {
        return self::linearGradientBackground('#254871', '#4A90E2');
    }

    public static function color(): string|array
    {
        return 'blue';
    }

    public static function icon():\Illuminate\Contracts\Support\Renderable{
        return new class implements \Illuminate\Contracts\Support\Renderable{
            public function render(){
        return
            <<<'SVG'
<path d="M80 32c-64 256 48 416 176 464 128-48 240-208 176-464-112 32-240 32-352 0z"></path>
SVG;
    }};}

    public static function standardRule(): \Traversable
    {
        yield 'Can be played only as a response to an Attack.';
    }

    public static function title(): string
    {
        return 'Defense';
    }
}
