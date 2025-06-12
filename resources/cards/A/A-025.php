<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Busybody')]
    #[Concept('Draw')]
    #[ImageCredit('Image by Adobe: Stock #58908676')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.local>A025.jpeg</x-card.hero.local>

<x-card.flavortext>Mind your own business.</x-card.flavortext>

<x-card.phaserule type="Draw" >
<text >
<x-card.ruleline>Choose an opponent. That opponent</x-card.ruleline>
    <x-card.ruleline>reveals their hand. Choose one card.</x-card.ruleline>
    <x-card.ruleline>The opponent puts that card</x-card.ruleline>
    <x-card.ruleline>on the bottom of their Library.</x-card.ruleline>
    <x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
</text></x-card.phaserule>

HTML;
        }
    };
