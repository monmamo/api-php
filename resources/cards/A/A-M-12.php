<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Hogner')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('Level', 45)]
    #[Concept('DamageCapacity', 20)]
    #[Concept('Size', 6)]
    #[Concept('Speed', 2)]
    #[Concept('Boost', '4')]
    #[Concept('Cost', 9)]
    #[ImagePrompt('firey porcupine of weird zoology')]
    #[ImageCredit('Image by Merry Shuporna Biswas')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-12.png</x-card.hero.local>

    <x-card.taxons>Pyros, Hystricos</x-card.taxons>

<x-card.phaserule type="Attack" ><text>
<x-card.ruleline class="skilltitle">Hot Quills</x-card.ruleline>
<x-card.ruleline>Does 3d6 @damage.</x-card.ruleline>
        </text></x-card.phaserule>

HTML;
        }
    };
