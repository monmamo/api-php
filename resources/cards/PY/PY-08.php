<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// Has same effect as Magma (PY-09).
// inspiration: https://bulbapedia.bulbagarden.net/wiki/Magma_Basin_(Brilliant_Stars_144)
return new
#[Title('Magma Basin')]
#[Concept('Place')]
#[ImageCredit('')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>Draw phase:: You may attach a Fire (A-002) from your Refuse to one of your Pyros Monsters. If this succeeds, put 4 @damage on that Monster.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
