<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Kitpony')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 23)]
    #[Concept('Level', 48)]
    #[Concept('Size', 7)]
    #[Concept('Speed', 4)]
    #[Concept('Boost',4)]
    #[LocalHeroImage('hero/felequos.png')]
    #[IsGeneratedImage]
#[\App\CardAttributes\ImageIsPrototype]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Felequos</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
