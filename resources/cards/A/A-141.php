<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-vector/lottery-ticket-concept-illustration_171056284.htm

return new
    #[Title('Lottery')]
    #[Concept('Vendor')]
    #[Concept('Cost', 3)]
    #[ImageCredit('Image by storyset on Freepik')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.local>A146.jpg</x-card.hero.local> 

<x-card.flavortext>Can't win if you don't play!</x-card.flavortext>

<x-card.phaserule type="Draw" lines="2"><text>
<x-card.normalrule>Discard 2+ cards from your hand.</x-card.normalrule>
<x-card.normalrule>Then draw that number plus 2 cards.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</text></x-card.phaserule>
HTML;
        }
    };
