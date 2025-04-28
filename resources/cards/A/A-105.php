<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.shutterstock.com/image-photo/3d-rendering-tranquilizer-dart-on-white-169987271

return new
    #[Title('Tranquilizer Dart')]
    #[Concept('Item')]
    #[Concept('Weapon')]
    #[Concept('Cost', 3)]
        #[ImageCredit('Shutterstock #169987271 by Inked Pixels')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.local>hero/tranquilizer-dart.jpg</x-card.hero.local>

<x-card.flavortext>I think something just stung me……</x-card.flavortext>

            <x-card.phaserule type="Upkeep" y="580" lines="1"><text >
<x-card.normalrule>Attach this card to a Character.</x-card.normalrule>
</text></x-card.phaserule>

        <x-card.phaserule type="Resolution" lines="3"><text>
        <x-card.normalrule>For 1d4 turns hence, the</x-card.normalrule>
<x-card.normalrule>affected Character cannot attack,</x-card.normalrule> 
<x-card.normalrule>cannot defend, and has Speed of 0.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
        }
    };
