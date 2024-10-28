<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-vector/time-is-money-background_1014317.htm

return new
    #[Title('Investment')]
    #[Concept('Draw')]
    #[ImageCredit('Image by photoroyalty on Freepik')]
    #[FlavorText('Past performance is not indicative of future results.')]
    #[LocalHeroImage('A135.jpg')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
        <x-card.phaserule y="500" type="Draw" lines="2"><text>
            <x-card.normalrule>Put any number of cards </x-card.normalrule>
                <x-card.normalrule>facedown on the Battlefield.</x-card.normalrule>
    </text>
</x-card.phaserule>

<x-card.phaserule type="Resolution" lines="3"><text>
            <x-card.normalrule>For each card you put facedown, </x-card.normalrule>
                <x-card.normalrule>draw 1d4-1 cards. </x-card.normalrule>
                <x-card.normalrule>Discard the facedown cards. </x-card.normalrule>
    </text>
</x-card.phaserule>
HTML;
        }
    };
