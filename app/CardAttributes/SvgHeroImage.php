<?php

namespace App\CardAttributes;

use App\Renderable\Svg;

#[\Attribute(\Attribute::TARGET_CLASS)]
class SvgHeroImage extends Svg
{
    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group unary
     *
     * @return void
     */
    public function __construct(
        public string $code,
        public string $viewbox = '0 0 512 512',
    ) {
        static $hero_config;
        $hero_config ??= \config('card-design.hero');
        \extract($hero_config);

        parent::__construct(
            x: $x + ($width - $height) / 2,
            y: $y,
            width: $height,
            height: $height,
            viewBox: $this->viewbox,
            svg: \App\Strings\html(
                'g',
                ['fill' => '#ffffff', 'fill-opacity' => 1],
                $this->code,
            ),
        );
    }
}
