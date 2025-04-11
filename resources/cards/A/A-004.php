<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-photo/hand-pouring-food-birds_1713221.htm

return new
    #[Title('Alms for the Poor')]
    #[Concept('Draw')]
    #[FlavorText('Pay it forward even when it isn\'t cool.')]
    #[ImageCredit('Image by freepik')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.hero.local>A004.jpg</x-card.hero.local>

    <x-card.phaserule type="Draw" lines="5"><text>
        <x-card.normalrule>The player with the fewest cards</x-card.normalrule>
        <x-card.normalrule>in their hand can draw 1 card.</x-card.normalrule>
        <x-card.normalrule>Once they have done so,</x-card.normalrule>
        <x-card.normalrule>you may draw up to 3 cards.</x-card.normalrule>
        <x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
            </text></x-card.phaserule>
HTML;
    }
};
