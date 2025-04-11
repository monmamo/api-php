<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-photo/brain-booster-pills-container-still-life_65114716.htm

return new
    #[Title('Medicinal Compound')]
    #[Concept('Item')]
    #[Concept('Healing')]
    #[ImageCredit('Image by freepik')]
    #[FlavorText('Most efficacious in every case.')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>A119.jpg</x-card.hero.local>

    <x-card.phaserule type="Upkeep"  lines="5"><text >
<x-card.normalrule>Discard any number of cards </x-card.normalrule>
<x-card.normalrule>from your hand.</x-card.normalrule> 
<x-card.normalrule>For each card you discarded,</x-card.normalrule>
<x-card.normalrule>restore 2 @damage to 1 Monster.</x-card.normalrule>
<x-card.smallrule>You may use this effect across multiple Monsters.</x-card.smallrule>
</text></x-card.phaserule>
HTML;
        }
    };
