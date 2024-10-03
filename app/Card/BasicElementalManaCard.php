<?php

namespace App\Card;

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\SvgIcon;



class BasicElementalManaCard implements CardComponents
{
    use DefaultCardAttributes;

    public function __construct(
        public readonly string $viewBox,
        public readonly string $svg,
        public readonly string $title,
        public readonly string $imageCredit,
    ) {}

    public function background(): ?string
    {
        $width = $height = 700; // config('card-design.viewbox.height') ;

        $x = (\config('card-design.width') - $width) / 2;
        $y = \config('card-design.viewbox.y');

        $icon = new SvgIcon(
            x: $x,
            y: $y,
            width: $width,
            height: $height,
            viewBox: $this->viewBox,
            svg: $this->svg,
        );

        return '<x-card.background fill="#000000" />' . $icon->render();
    }

    /**
     * @group nonary
     */
    public function concepts(): array
    {
        return [new Concept('Mana')];
    }

    public function name(): string
    {
        return $this->title;
    }
}
