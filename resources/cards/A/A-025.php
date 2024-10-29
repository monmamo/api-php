<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Busybody')]

    #[Concept('Draw')]

    #[LocalHeroImage('A025.jpeg')]
    #[ImageCredit('Image by Adobe: Stock #58908676')]

    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Draw" lines="4">
<text >
<x-card.normalrule>Choose an opponent. That opponent</x-card.normalrule>
    <x-card.normalrule>reveals their hand. Choose one card.</x-card.normalrule>
    <x-card.normalrule>The opponent puts that card</x-card.normalrule>
    <x-card.normalrule>on the bottom of their Library.</x-card.normalrule>
</text></x-card.phaserule>

HTML;
        }
    };
