<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\RaidCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Sleight of Hand')]
    #[Concept('Cost', 2)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;
        use RaidCardAttributes { RaidCardAttributes::system insteadof DefaultCardAttributes; }

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule lines="5">
<x-card.normalrule>Put any number of cards from your</x-card.normalrule>
    <x-card.normalrule>hand on the bottom of your Library in</x-card.normalrule>
    <x-card.normalrule>any order. Then, draw a card for each card</x-card.normalrule>
    <x-card.normalrule>you put on the bottom of your Library.</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
