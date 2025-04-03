<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Lochjaw')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 24)]
    #[Concept('Level', 45)]
    #[Concept('Size', 6)]
    #[Concept('Speed', 3)]
    #[Concept('Boost', 4)]
    #[LocalHeroImage('hero/A-M-04.jpeg')]
    #[IsGeneratedImage]
#[\App\CardAttributes\ImageIsPrototype]
    #[ImagePrompt('blue seal of weird zoology swimming in a lake, trees and mountains in the background')]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Aquos, Otarys</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Attack" height="210">
    <text>
<x-card.skilltitle>Water Jet</x-card.skilltitle>
<x-card.normalrule>Discard 1+ Water (A-001) from this Monster.</x-card.normalrule>
<x-card.normalrule>For each Water (A-001) discarded,</x-card.normalrule>
<x-card.normalrule>does 3 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
