<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Dandruff')]
    #[Concept('Bane')]
    #[ImageCredit('Image by Merry Shuporna Biswas')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.local>hero/Dandruff.jpg</x-card.hero.local>

<x-card.flavortext>Make it snow.</x-card.flavortext>

<x-card.phaserule type="Resolution" >
<text>
<x-card.ruleline>When this Monster takes a</x-card.ruleline>
<x-card.ruleline>physical attack, the attacking</x-card.ruleline>
<x-card.ruleline>Monster takes 1d6 @damage.</x-card.ruleline>
</text>
</x-card.phaserule>

HTML;
        }
    };
