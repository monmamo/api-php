<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Lottery')]

    #[Concept('Vendor')]
    #[LocalHeroImage('A146.jpg')] // https://www.freepik.com/free-vector/lottery-ticket-concept-illustration_171056284.htm

    #[ImageCredit('Image by storyset on Freepik')]

    #[FlavorText("Can't win if you don't play!")]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Draw" lines="2"><text>
<x-card.normalrule>Discard 2+ cards from your hand.</x-card.normalrule>
<x-card.normalrule>Then draw that number plus 2 cards.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
        }
    };
