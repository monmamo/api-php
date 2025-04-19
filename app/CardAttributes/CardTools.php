<?php

namespace App\CardAttributes;

use Illuminate\Contracts\Support\Htmlable;

trait CardTools
{
    /**
     * Inserts a full-size background image for the card.
     *
     * @group unary
     */
    protected function fullSizeBackground($filename): Htmlable
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

    /**
     * Creates a hero image for the card from a local image file.
     *
     * @group unary
     */
    protected function localHeroImage($filename): Htmlable
    {
        return \App\Strings\html(
            'image',
            [
                'x' => \config('card-design.hero.x'),
                'y' => \config('card-design.hero.y'),
                'class' => 'hero',
                'href' => \App\Card\localHeroUri($filename),
            ],
        );
    }

    /**
     * Creates a hero image for the card from SVG.
     *
     * @group variadic
     *
     * @param null|mixed $y
     */
    protected function svgHeroImage($scale, $viewbox, $y, $slot): Htmlable
    {
        $height = \config('card-design.hero.height') * $scale;
        $width = \config('card-design.hero.width') * $scale;
        $x = (\config('card-design.hero.width') - $width) / 2;

        return \App\Strings\html(
            'x-svg',
            \compact('x', 'y', 'height', 'width', 'viewBox'),
            $slot,
        );
    }
}
