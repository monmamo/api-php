<?php

namespace App\Card;

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\Facades\Blade;

class BasicElementalManaCard implements CardComponents
{
    use DefaultCardAttributes{
        __construct as construct;
    }

    /**
     * @group nonary
     */
    public function __construct(
        string $path,
        public $svg,
        public readonly string $title,
        public readonly string $imageCredit,
    ) {$this->construct($path);}

    /**
     * @group nonary
     */
    public function background(): \Traversable
    {
        $width = $height = 700;

        yield '<x-card.background fill="#000000" />';

        yield Blade::deferRender(
            '<x-svg id="background-icon" :$x :$y :$height :$width :$viewBox>' . $this->svg . '</x-svg>',
            [
                'x' => (\config('card-design.width') - $width) / 2,
                'y' => \config('card-design.viewbox.y'),
                'height' => $height,
                'width' => $width,
                'viewBox' => '0 0 512 512',
            ],
        );
    }

    /**
     * @group nonary
     */
    public function concepts(): array
    {
        return [];
    }

    /**
     * @group nonary
     */
    public function name(): string
    {
        return $this->title;
    }
}
