<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-photo/brain-booster-pills-container-still-life_65114716.htm

return new
#[Title('Medicinal Compound')]

    #[Concept('Item')]
    #[Concept('Healing')]
    #[LocalHeroImage('A119.jpg')]

    #[ImageCredit('Image by freepik')]

    #[FlavorText('Most efficacious in every case.')]

    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Upkeep"  lines="3"><text >
<x-card.normalrule>Discard any number of cards from</x-card.normalrule>
<x-card.normalrule>your hand. For each card you</x-card.normalrule>
<x-card.normalrule>discarded remove 5 damage from 1 Monster.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
        }
    };
