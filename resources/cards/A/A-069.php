<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Insurance')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule  >
<x-card.smallrule>Put this card on the Battlefield before</x-card.smallrule>
<x-card.smallrule>a Catastrophe card is played.</x-card.smallrule>
<x-card.normalrule>When a Catastrophe card is played,</x-card.normalrule>
<x-card.normalrule>you may shuffle all or part of your</x-card.normalrule>
<x-card.normalrule>Discard into your Library.</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
