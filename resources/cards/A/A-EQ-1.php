<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Equalizer 1')]
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
</g><text x="50%" y="410" font-family="Roboto" text-anchor="middle"  font-size="300" font-weight="700" fill="#ffffff" >1</text>

    <x-card.phaserule type="Draw" ><text>
    <x-card.normalrule>All players shuffle their hand into</x-card.normalrule>
<x-card.normalrule>their Library and draw up to 4 cards.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
