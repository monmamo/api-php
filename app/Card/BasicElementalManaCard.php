<?php

namespace App\Card;

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use Illuminate\Support\Facades\Blade;

class BasicElementalManaCard implements CardComponents
{
    use DefaultCardAttributes;

    /**
     * @group nonary
     */
    public function __construct(
        public readonly string $viewBox,
        public $svg,
        public readonly string $title,
        public readonly string $imageCredit,
    ) {}

    /**
     * @group nonary
     */
    public function background(): ?string
    {
        $width = $height = 700;

        return Blade::render(
            '<x-card.background fill="#000000" /><x-svg id="background-icon" :$x :$y :$height :$width :$viewBox>{{$svg}}</x-svg>',
            [
                'x' => (\config('card-design.width') - $width) / 2,
                'y' => \config('card-design.viewbox.y'),
                'height' => $height,
                'width' => $width,
                'viewBox' => $this->viewBox,
                'svg' => $this->svg,
            ],
        );
    }

    /**
     * @group nonary
     */
    public function concepts(): array
    {
        return [new Concept('Mana')];
    }

    /**
     * @group nonary
     */
    public function name(): string
    {
        return $this->title;
    }
}
