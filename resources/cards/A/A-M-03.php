<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Seaweed')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 23)]
    #[Concept('Level', 40)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 3)]
    #[Concept('Boost',3)]
    #[IsGeneratedImage]
#[\App\CardAttributes\ImageIsPrototype]
    #[LocalHeroImage('hero/A-M-03.png')]
    #[ImagePrompt('brown cat of weird zoology swimming in a lake')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="400" height="55" >
<x-card.normalrule>Taxons: Aquos, Felos</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Skill" height="245">
    <text>
<x-card.skilltitle>Saliva Spray</x-card.skilltitle>
<x-card.normalrule>Discard 1+ Water (A-001) from this Monster.</x-card.normalrule>
<x-card.normalrule>For each Water (A-001) discarded,</x-card.normalrule>
<x-card.normalrule>Attack does 1 @damage less damage,</x-card.normalrule>
<x-card.normalrule>& that Monster takes that damage instead.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
