<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Flameback')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('Level', 30)]
    #[Concept('DamageCapacity', 15)]
    #[Concept('Size', 4)]
    #[Concept('Speed', 4)]
    #[Concept('Boost', 2)]
    #[Concept('Cost', 6)]
    #[ImagePrompt('red fire rodent monster of weird zoology next to a caldera')]
    #[ImageCredit('Image by Merry Shuporna Biswas')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-09.jpg</x-card.hero.local>

    <x-card.taxons>Pyros, Musos</x-card.taxons>

<x-card.phaserule type="Upkeep" >
    <text>
<x-card.ruleline class="skilltitle">Fiery Pest</x-card.ruleline>
<x-card.ruleline>Discard 1 Mobster or Bystander</x-card.ruleline>
<x-card.ruleline>from the Battlefield.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
