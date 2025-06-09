<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-vector/time-is-money-background_1014317.htm

return new
    #[ImageCredit('Image by photoroyalty on Freepik')]
    #[Concept('Vendor')]
    #[Title('Dividends')]
    #[Concept('Cost', '3')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.flavortext>The reward for investing with patience.</x-card.flavortext>

    <x-card.hero.local>A135.jpg</x-card.hero.local>

<x-card.phaserule type="Draw" ><text>
<x-card.ruleline>Turn your Discard pile face-down,</x-card.ruleline>
<x-card.ruleline>shuffle it, and draw 1d6 cards from it</x-card.ruleline>
<x-card.ruleline>without looking at them.</x-card.ruleline>
<x-card.ruleline>Shuffle those cards into your Library.</x-card.ruleline>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</text></x-card.phaserule>
HTML;
        }
    };
