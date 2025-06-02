<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Stapler')]
    #[Concept('Item')]
    #[Concept('Weapon')]
    #[ImageCredit('Icon by Caro Asercion')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.svg>
<path d="M476.5 195.8L52.59 216.6L46.03 245.3L186 245.3L188.2 260.6L486.3 260.6Z" class="" fill="#aa4646" fill-opacity="1" /><path d="M41.78 271L21.01 363.6L27.57 391.2L486.6 391.2L491 363.6L179.6 361.4L161 271Z" class="" fill="#aa4646" fill-opacity="1" /><path d="M192.5 279.1L199.6 320.1L469.1 320.1L469.1 279.1Z" class="selected" fill="#c9c9c9" fill-opacity="1" /><path d="M427 295L453.4 295C457.2 295 460.2 298 460.2 301.9C460.2 305.5 457.2 308.6 453.4 308.6L427 308.6C423.1 308.6 420.1 305.5 420.1 301.9C420.1 298 423.1 295 427 295Z" class="" fill="#000000" fill-opacity="1" /></x-card.hero.svg>

<x-card.flavortext>Don't tell Milton.</x-card.flavortext>

<x-card.cardrule lines="2">
<x-card.normalrule>Does 6 damage. </x-card.normalrule>
<x-card.normalrule>Target cannot attack on next turn.</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
