<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Equalizer 2')]
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
</g><text x="50%" y="410" font-family="Roboto" text-anchor="middle"  font-size="300" font-weight="700" fill="#ffffff" >2</text>

    <x-card.phaserule type="Draw" ><text>
<x-card.ruleline>Each player either draws or discards</x-card.ruleline>
<x-card.ruleline>until he or she has 5 cards</x-card.ruleline>
<x-card.ruleline>in his or her hand.</x-card.ruleline>
<x-card.ruleline class="smallrule">(Your opponents do this first.)</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
