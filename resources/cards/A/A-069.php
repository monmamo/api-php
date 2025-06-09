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
<x-card.ruleline class="smallrule">Put this card on the Battlefield before</x-card.ruleline>
<x-card.ruleline class="smallrule">a Catastrophe card is played.</x-card.ruleline>
<x-card.ruleline>When a Catastrophe card is played,</x-card.ruleline>
<x-card.ruleline>you may shuffle all or part of your</x-card.ruleline>
<x-card.ruleline>Discard into your Library.</x-card.ruleline>
</x-card.cardrule>
HTML;
        }
    };
