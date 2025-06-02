<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Canibuzz')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('Level', 35)]
    #[Concept('DamageCapacity', 16)]
    #[Concept('Size', 3)]
    #[Concept('Speed', 5)]
    #[Concept('Boost', 2)]
    #[Concept('Cost', 7)]
    #[ImageCredit('Image by Merry Shuporna Biswas')]
    #[ImagePrompt('yellow electric dog monster of weird zoology in a factory')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-07.jpg</x-card.hero.local>

    <x-card.taxons>Energos, Canos</x-card.taxons>

<x-card.phaserule type="Skill" height="175">
    <text>
<x-card.skilltitle>Puppy Power</x-card.skilltitle>
<x-card.normalrule>You may transfer Electricity (A-003) between</x-card.normalrule>
<x-card.normalrule>this Monster &amp; any other Energos Monster.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
