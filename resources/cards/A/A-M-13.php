<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Felequess L48')]

    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 90)]
    #[Concept('Level', 48)]
    #[Concept('Size', 28)]
    #[Concept('Speed', 16)]
    #[Concept('Multiplier:x4')]
    #[LocalHeroImage('hero/felequos.png')]

    #[IsGeneratedImage]
    #[ImageCredit(null)]

    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="460" height="55" >
<x-card.normalrule>Taxons: Felequos</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
