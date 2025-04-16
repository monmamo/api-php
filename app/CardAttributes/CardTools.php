<?php

namespace App\CardAttributes;

trait CardTools
{
    /**
     * Creates a hero image for the card from SVG.
     * @group variadic
     */
    protected function svgHeroImage($scale = 1, $viewbox = '0 0 512 512', $y = null, $slot): \Illuminate\Contracts\Support\Htmlable
    {
        $height = config('card-design.hero.height') * $scale;
        $width = config('card-design.hero.width') * $scale;
        $x = (config('card-design.hero.width') - $width) / 2;

        return \App\Strings\html(
            'x-svg',
            compact('x', 'y', 'height', 'width', 'viewBox'),
            $slot
        );
    }

    /**
     * Creates a hero image for the card from a local image file.
     * @group unary
     */
    protected function localHeroImage($filename): \Illuminate\Contracts\Support\Htmlable
    {
        return \App\Strings\html(
            'image',
            [
                'x' => config("card-design.hero.x"),
                'y' => config("card-design.hero.y"),
                'class' => "hero",
                'href' => \App\Card\localHeroUri($filename),
            ],
        );
    }

    /**
     * Inserts a full-size background image for the card.
     * @group unary
     */
    protected function fullSizeBackground($filename): \Illuminate\Contracts\Support\Htmlable
    {
        return \App\Strings\html(
            'image',
            [
                'x' => 0,
                'y' => 0,
                'href' => \App\Card\localHeroUri($filename),
            ],
        );
    }
}
