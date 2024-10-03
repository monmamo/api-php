<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Berserk')]
    #[Concept('Trait')]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="2"><text>
            <x-card.normalrule>Speed +2 when </x-card.normalrule>
            <x-card.normalrule>remaining HP drops below half.</x-card.normalrule>
        </text></x-card.phaserule>
HTML;
        }
    };
