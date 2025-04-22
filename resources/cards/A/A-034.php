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

<x-card.cardrule lines="5">
<x-card.normalrule>This card can be used only during Setup.</x-card.normalrule>
<x-card.normalrule>Put this card on your Battlefield.</x-card.normalrule>
<x-card.normalrule>On each setup turn, you may</x-card.normalrule> 
    <x-card.normalrule>attach a Trait card to a Monster</x-card.normalrule>
<x-card.normalrule>from your hand, Library or Discard.</x-card.normalrule>
</x-card.phaserule>
HTML;
    }
};
