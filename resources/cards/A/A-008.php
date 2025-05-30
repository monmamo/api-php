<?php

use App\CardAttributes\CardTools;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Bagman')]
    #[Concept('Vendor')]
    #[Concept('Integrity', '3')]
    #[IsGeneratedImage]
#[ImageIsPrototype]
    #[ImagePrompt('dark man in a mask wearing a trenchcoat carrying a large tote bag')]
    class(__FILE__) implements CardComponents
    {
        use CardTools;
        use DefaultCardAttributes;

        /**
         * @implements \App\Contracts\Card\CardComponents::background
         */
        public function background(): \Traversable
        {
            yield $this->fullSizeBackground('A-008-full.png');
        }

        public function content(): \Traversable
        {
            // custom flavor text
            yield <<<'HTML'
<text  y="360" class="credit" text-anchor="middle" alignment-baseline="baseline"><tspan x="70%" dy="25" class="flavor" text-anchor="middle" alignment-baseline="hanging" fill="#ffffff">Just collecting the dues.</tspan></text>

<x-card.cardrule y="450" lines="2" >
<x-card.normalrule>You may play this card only if you have a</x-card.normalrule>
<x-card.normalrule>Mobster card on the Battlefield.</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Draw" lines="6"><text>
<x-card.normalrule>Choose one opponent. Roll 1d6. That</x-card.normalrule>
<x-card.normalrule>opponent discards that many cards from</x-card.normalrule>
<x-card.normalrule>his/her Library or all if he/she doesn't have</x-card.normalrule>
<x-card.normalrule>that many. You may draw as many cards</x-card.normalrule>
<x-card.normalrule>as were discarded.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</text></x-card.phaserule>
HTML;
        }
    };
