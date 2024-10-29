<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Alms for the Poor')]
    #[Concept('Draw')]
    #[FlavorText('Pay it forward even when it isn\'t cool.')]
    #[LocalHeroImage('A004.jpg')] // https://www.freepik.com/free-photo/hand-pouring-food-birds_1713221.htm
    #[ImageCredit('Image by freepik')]

    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.phaserule type="Draw" lines="4"><text>
        <x-card.normalrule>The player with the fewest cards</x-card.normalrule>
        <x-card.normalrule>in their hand can draw 1 card.</x-card.normalrule>
        <x-card.normalrule>Once they have done so,</x-card.normalrule>
        <x-card.normalrule>you may draw up to 3 cards.</x-card.normalrule>
    </text></x-card.phaserule>
HTML;
        }
    };
