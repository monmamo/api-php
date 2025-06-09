<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Lochjaw')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('Level', 45)]
    #[Concept('DamageCapacity', 24)]
    #[Concept('Size', 6)]
    #[Concept('Speed', 3)]
    #[Concept('Boost', 4)]
    #[Concept('Cost', 9)]
    #[ImagePrompt('blue seal of weird zoology swimming in a lake, trees and mountains in the background')]
    #[ImageCredit('Image by Nilanjan Animesh')]
        class(__FILE__) implements CardComponents
        {
            use DefaultCardAttributes;

            public function content(): \Traversable
            {
                yield <<<'HTML'
    <x-card.hero.local>hero/A-M-04.jpg</x-card.hero.local>

    <x-card.taxons>Aquos, Otarys</x-card.taxons>

<x-card.phaserule type="Attack" >
    <text>
<x-card.ruleline class="skilltitle">Water Jet</x-card.ruleline>
<x-card.ruleline>Discard 1+ Water (A-001) from this Monster.</x-card.ruleline>
<x-card.ruleline>For each Water (A-001) discarded,</x-card.ruleline>
<x-card.ruleline>does 3 @damage.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
            }
        };
