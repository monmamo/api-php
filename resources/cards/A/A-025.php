<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Busybody')]
    #[Concept('Draw')]
    #[ImageCredit('Image by Adobe: Stock #58908676')]
    #[FlavorText('Mind your own business.')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
            <x-card.hero.local>A025.jpeg</x-card.hero.local>

<x-card.phaserule type="Draw" lines="5">
<text >
<x-card.normalrule>Choose an opponent. That opponent</x-card.normalrule>
    <x-card.normalrule>reveals their hand. Choose one card.</x-card.normalrule>
    <x-card.normalrule>The opponent puts that card</x-card.normalrule>
    <x-card.normalrule>on the bottom of their Library.</x-card.normalrule>
    <x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</text></x-card.phaserule>

HTML;
        }
    };
