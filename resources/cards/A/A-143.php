<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-vector/time-is-money-background_1014317.htm

return new
    #[Title('Financial Planner')]
    #[Concept('Bystander')]
    #[ImageCredit('Image by photoroyalty on Freepik')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>A135.jpg</x-card.hero.local> 

    <x-card.phaserule type="Upkeep"  >
    <text >
    <x-card.ruleline>You may put one card of your</x-card.ruleline>
<x-card.ruleline>choice from your Discard pile</x-card.ruleline>
<x-card.ruleline>on the bottom of your Library.</x-card.ruleline>
    </text>
</x-card.phaserule>
HTML;
        }
    };
