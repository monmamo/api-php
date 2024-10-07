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
#[Concept('Bane')]
#[Concept('Item')]
#[Concept('Weapon')]
    #[ImageCredit('Shutterstock #169987271 by Inked Pixels')]
    #[LocalHeroImage('hero/tranquilizer-dart.jpg')]
    #[FlavorText('Ouuuuuch……')]

    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'

<text y="500" filter="url(#solid)">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        </text >

    <x-card.phaserule type="Upkeep"  height="100">
        <text >
<x-card.normalrule>For 1d4 turns (including this one),</x-card.normalrule>
<x-card.normalrule>apply Paralysis.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
