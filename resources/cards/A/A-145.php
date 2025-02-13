<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('First Aid Kit')]
    #[Concept('Vendor')]
    #[ImageCredit('Image by Freepik')]
    #[LocalHeroImage('hero/first-aid-kit.jpg')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Draw" height="165"><text>
<x-card.normalrule>Search your Library or Discard</x-card.normalrule>
<x-card.normalrule>for a Healing Item card.</x-card.normalrule>
<x-card.normalrule>Put the card you find in your hand.</x-card.normalrule>
<x-card.smallrule>If you searched your Library, shuffle it.</x-card.smallrule>
</text></x-card.phaserule>

HTML;
        }
    };
