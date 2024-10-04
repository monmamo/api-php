<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Gene Pool')]

    #[Concept('Setup')]

#[LocalHeroImage('hero/gene-pool.jpg')] // https://www.freepik.com/free-photo/dna-representation-concept_44999157.htm

    #[ImageCredit('Image by freepik')]

    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Setup" lines="3">
        <text >
<x-card.normalrule>Attach a Trait card to a Monster</x-card.normalrule>
<x-card.normalrule>from your hand, Library or Discard.</x-card.normalrule>
<x-card.normalrule>You may play another card on this turn.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML;
        }
    };
