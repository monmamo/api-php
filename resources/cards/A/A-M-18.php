<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageInDevelopment;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Spike')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 18)]
    #[Concept('Level', 40)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 3)]
    #[Concept('Boost', 3)]
    #[IsGeneratedImage]
    #[ImageIsPrototype]
    #[ImageInDevelopment]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-18.jpeg</x-card.hero.local>

    <x-card.taxons>Aquos, Hystricos</x-card.taxons>

<x-card.phaserule type="Attack" height="140">
    <text>
<x-card.skilltitle>Ball of Pain</x-card.skilltitle>
<x-card.normalrule>Does Speed+3d6 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
