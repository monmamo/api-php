<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-vector/time-is-money-background_1014317.htm

return new
    #[Title('Financial Planner')]
    #[Concept('Bystander')]
    #[ImageCredit('Image by photoroyalty on Freepik')]
    #[Prerequisites(y: 475)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>A135.jpg</x-card.hero.local> 

    <x-card.phaserule type="Upkeep" lines="3" >
    <text >
    <x-card.normalrule>You may put one card of your</x-card.normalrule>
<x-card.normalrule>choice from your Discard pile</x-card.normalrule>
<x-card.normalrule>on the bottom of your Library.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML;
        }
    };
