<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-vector/time-is-money-background_1014317.htm

return new
    #[Title('Investment')]
    #[Concept('Draw')]
    #[Concept('Cost', 2)]
    #[ImageCredit('Image by photoroyalty on Freepik')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
            <x-card.hero.local>A135.jpg</x-card.hero.local>

<x-card.flavortext>Past performance is not indicative of future results.</x-card.flavortext>
            
<x-card.phaserule y="565" type="Draw" ><text>
<x-card.ruleline class="smallrule">Put this card in front of you. Put any number</x-card.ruleline>
<x-card.ruleline class="smallrule">of cards facedown on the Battlefield.</x-card.ruleline>
</text>
</x-card.phaserule>

<x-card.phaserule type="Resolution" ><text>
<x-card.ruleline>For each card you put facedown,</x-card.ruleline>
<x-card.ruleline>draw 1d4-1 cards.</x-card.ruleline>
<x-card.ruleline>Discard this card &amp; the facedown cards.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
