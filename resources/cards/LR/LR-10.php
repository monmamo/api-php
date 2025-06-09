<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Swagger')]
#[Concept('Cost', 2)]
#[Concept('Movement', 1)]
#[Concept('Training', '?')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>For each Noise you make this turn,</x-card.ruleline>
    <x-card.ruleline>+1 Training.</x-card.ruleline>
</x-card.cardrule>
HTML;
        }
    };
