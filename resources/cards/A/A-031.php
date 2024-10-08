<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Dual Cranial Horns')]
#[Concept('Trait')]
#[Concept('Physical')]
#[Prerequisites(lines: [], y: 465)]
#[ImageCredit('Image by wirestock on Freepik')]
#[LocalHeroImage('A064.jpg')] // https://www.freepik.com/free-photo/closeup-shot-beautiful-thompson-s-gazelle_10292458.htm

    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.phaserule type="Resolution" lines="3"><text>
    <x-card.normalrule>Size +6.</x-card.normalrule>
<x-card.normalrule>Gives the attack “Horn Attack”</x-card.normalrule>
<x-card.normalrule>which does Speed×2 damage.</x-card.normalrule>
    </text></x-card.phaserule>
HTML;
        }
    };
