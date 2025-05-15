<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\RaidCardAttributes;
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
        use RaidCardAttributes { RaidCardAttributes::system insteadof DefaultCardAttributes; }

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule lines="2">
<x-card.normalrule>For each Noise you make this turn,</x-card.normalrule>
    <x-card.normalrule>+1 Training.</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
