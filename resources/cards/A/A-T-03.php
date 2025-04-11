<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Berserk')]
    #[Concept('Trait')]
    #[Concept('Cost', 3)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="2"><text>
            <x-card.normalrule>Increase Speed by 1</x-card.normalrule>
            <x-card.normalrule>for each 4 @damage taken.</x-card.normalrule>
        </text></x-card.phaserule>
HTML;
        }
    };
