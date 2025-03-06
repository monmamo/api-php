<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.shutterstock.com/image-photo/3d-rendering-tranquilizer-dart-on-white-169987271

return new
    #[Title('Tranquilizer Dart')]
    #[Concept('Attack')]
    #[Concept('Item')]
    #[Concept('Weapon')]
    #[ImageCredit('Shutterstock #169987271 by Inked Pixels')]
    #[LocalHeroImage('hero/tranquilizer-dart.jpg')]
    #[FlavorText('I think something just stung me……')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
        <x-card.phaserule type="Resolution" lines="3"><text>
        <x-card.normalrule>For 1d4 turns hence, the</x-card.normalrule>
<x-card.normalrule>attacked Character cannot attack,</x-card.normalrule> 
<x-card.normalrule>cannot defend, and has Speed of 0.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
        }
    };
