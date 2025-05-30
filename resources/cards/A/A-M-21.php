<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Siria')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('Level', 35)]
    #[Concept('DamageCapacity', 16)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 2)]
    #[Concept('Boost', '3')]
    #[Concept('Cost', 7)]
    #[ImageCredit('Image by Merry Shuporna Biswas')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-21.jpg</x-card.hero.local>

    <x-card.taxons>Canos, Lumos</x-card.taxons>

<x-card.phaserule type="Trait" height="150">
    <text>
<x-card.skilltitle>Soothing Glow</x-card.skilltitle>
<x-card.normalrule>Reduce Speed of all other Monsters by 2.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
