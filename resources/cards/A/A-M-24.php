<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Draco')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('Level', 35)]
    #[Concept('DamageCapacity', 13)]
    #[Concept('Size', 4)]
    #[Concept('Speed', 4)]
    #[Concept('Boost', 2)]
    #[Concept('Cost', 7)]
    #[ImageCredit('Image by Merry Shuporna Biswas')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/Draco.jpg</x-card.hero.local>

    <x-card.taxons>Regos, Draccanos</x-card.taxons>

HTML;
        }
    };
