<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-photo/dna-representation-concept_44999157.htm

return new
#[Title('Gene Pool')]
#[Concept('Setup')]
#[ImageCredit('Image by freepik')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>hero/gene-pool.jpg</x-card.hero.local>

<x-card.cardrule >
<x-card.ruleline>This card can be used only during Setup.</x-card.ruleline>
<x-card.ruleline>Put this card on your Battlefield.</x-card.ruleline>
<x-card.ruleline>On each setup turn, you may</x-card.ruleline> 
    <x-card.ruleline>attach a Trait card to a Monster</x-card.ruleline>
<x-card.ruleline>from your hand, Library or Discard.</x-card.ruleline>
</x-card.phaserule>
HTML;
    }
};
