<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Dandruff')]
    #[Concept('Bane')]
    #[IsGeneratedImage]
    #[ImageIsPrototype]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.local>hero/dandruff.jpeg</x-card.hero.local>

<x-card.flavortext>Make it snow.</x-card.flavortext>

<x-card.phaserule type="Resolution" >
<text>
<x-card.normalrule>When this Monster takes a</x-card.normalrule>
<x-card.normalrule>physical attack, the attacking</x-card.normalrule>
<x-card.normalrule>Monster takes 1d6 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
