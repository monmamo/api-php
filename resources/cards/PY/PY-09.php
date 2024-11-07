<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// Has same effect as Magma Basin (PY-08).
// inspiration: https://bulbapedia.bulbagarden.net/wiki/Magma_Basin_(Brilliant_Stars_144)
return new
#[Title('Magma')]
#[Concept('Draw')]
#[ImageCredit('')]
#[FlavorText([])]
#[Prerequisites([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>You may attach a Fire card from your Refuse to one of your Pyros Monsters. If this succeeds, put 4 damage on that Monster.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
