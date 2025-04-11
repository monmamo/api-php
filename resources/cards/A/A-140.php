<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\IsIncomplete;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration:: Giovanni's Last Resort PTCG card https://bulbapedia.bulbagarden.net/wiki/Giovanni%27s_Last_Resort_(Gym_Challenge_105)
return new
    #[Title('Last Resort')]
    #[Concept('Upkeep')]
    #[FlavorText('Now is not the time to panic.')]
    #[IsIncomplete]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule :lines="3">
<x-card.normalrule>Discard your hand.</x-card.normalrule>
<x-card.normalrule>Then remove all Damage</x-card.normalrule>
<x-card.normalrule>from one of your Characters.</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
