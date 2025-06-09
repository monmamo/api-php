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

<x-card.cardrule y="450"  >
<x-card.ruleline>You may play this card only if you have a</x-card.ruleline>
<x-card.ruleline>Mobster card on the Battlefield.</x-card.ruleline>
</x-card.cardrule>

<x-card.phaserule type="Draw" lines="6"><text>
<x-card.ruleline>Choose one opponent. Roll 1d6. That</x-card.ruleline>
<x-card.ruleline>opponent discards that many cards from</x-card.ruleline>
<x-card.ruleline>his/her Library or all if he/she doesn't have</x-card.ruleline>
<x-card.ruleline>that many. You may draw as many cards</x-card.ruleline>
<x-card.ruleline>as were discarded.</x-card.ruleline>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</text></x-card.phaserule>
HTML;
        }
    };
