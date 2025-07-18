<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// Has same effect as Magma Basin (PY-08).
// inspiration: https://bulbapedia.bulbagarden.net/wiki/Magma_Basin_(Brilliant_Stars_144)
return new
#[Title('Magma')]
#[Concept('Draw')]
#[ImageCredit('')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Draw" ><text>
<x-card.ruleline>You may attach a Fire (A-002) from your Refuse to one of your Pyros Monsters. If this succeeds, put 4 @damage on that Monster.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
