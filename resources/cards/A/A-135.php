<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-vector/time-is-money-background_1014317.htm

return new
    #[Title('Investment')]
    #[Concept('Draw')]
    #[ImageCredit('Image by photoroyalty on Freepik')]
    #[FlavorText('Past performance is not indicative of future results.')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
            <x-card.hero.local>A135.jpg</x-card.hero.local>
            
        <x-card.phaserule y="565" type="Draw" lines="2"><text>
        <x-card.smallrule>Put this card in front of you. Put any number</x-card.smallrule>
        <x-card.smallrule>of cards facedown on the Battlefield.</x-card.smallrule>
    </text>
</x-card.phaserule>

<x-card.phaserule type="Resolution" lines="3"><text>
            <x-card.normalrule>For each card you put facedown,</x-card.normalrule>
                <x-card.normalrule>draw 1d4-1 cards.</x-card.normalrule>
                <x-card.normalrule>Discard this card & the facedown cards.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML;
        }
    };
