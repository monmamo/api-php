<?php

namespace App\CardAttributes;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Blade;

#[\Attribute(\Attribute::TARGET_CLASS)]
class SvgHeroImage implements Renderable
{
    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group nonary|unary|variadic
     *
     * @uses parent::__construct
     *
     * @return void
     */
    public function __construct(public string $code, public string $viewbox = '0 0 512 512') {}

    public function render()
    {
        return Blade::render(
            '<x-card.hero-svg :$viewBox>{{$svg}}</x-card.hero-svg>',
            [
                'viewBox' => $this->viewbox,
                'svg' => \App\Strings\html(
                    'g',
                    ['fill' => '#ffffff', 'fill-opacity' => 1],
                    $this->code,
                ),
            ],
        );
    }
}
