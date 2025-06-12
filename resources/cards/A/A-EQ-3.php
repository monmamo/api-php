<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Equalizer 3')]
#[Concept('Draw')]
#[Concept('Cost', 3)]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.hero.svg >
            <rect x="64" y="96" width="384" height="128" fill="#ffffff" fill-opacity="50%" />
            <rect x="64" y="288" width="384" height="128" fill="#ffffff" fill-opacity="50%" />
        </x-card.hero.svg >
</g><text x="50%" y="410" font-family="Roboto" text-anchor="middle"  font-size="300" font-weight="700" fill="#ffffff" >3</text>

    <x-card.phaserule type="Draw" ><text>
<x-card.ruleline>Choose an opponent.</x-card.ruleline>
<x-card.ruleline>Draw cards until you have the</x-card.ruleline>
<x-card.ruleline>same number of cards in your hand</x-card.ruleline>
<x-card.ruleline>as that opponent.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
