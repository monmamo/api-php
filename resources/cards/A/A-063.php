<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-vector/time-is-money-background_1014317.htm

return new
    #[FlavorText('The reward for investing with patience.')]
    #[ImageCredit('Image by photoroyalty on Freepik')]
    #[Concept('Vendor')]
    #[Title('Dividends')]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(A135.jpg)" />
<x-card.phaserule type="Draw" lines="4"><text>
<x-card.normalrule>Turn your Discard pile face-down,</x-card.normalrule>
<x-card.normalrule>shuffle it, and draw 1d6 cards from it</x-card.normalrule>
<x-card.normalrule>without looking at them.</x-card.normalrule>
<x-card.normalrule>Shuffle those cards into your Library.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
        }
    };
