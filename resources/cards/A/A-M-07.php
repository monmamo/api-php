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
    #[Title('Canibuzz')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 16)]
    #[Concept('Level', 35)]
    #[Concept('Size', 3)]
    #[Concept('Speed', 5)]
    #[Concept('Boost',2)]
    #[IsGeneratedImage]
#[\App\CardAttributes\ImageIsPrototype]
    #[ImageCredit(null)]
    #[LocalHeroImage('hero/A-M-07.png')]
    #[ImagePrompt('yellow electric dog monster of weird zoology in a factory')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Energos, Canos</x-card.normalrule>
</x-card.cardrule>


<x-card.phaserule type="Skill" height="175">
    <text>
<x-card.skilltitle>Puppy Power</x-card.skilltitle>
<x-card.normalrule>You may transfer Electricity (A-003) between</x-card.normalrule>
<x-card.normalrule>this Monster & any other Energos Monster.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
