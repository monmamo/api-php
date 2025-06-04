<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsIncomplete;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration:: Giovanni's Last Resort PTCG card https://bulbapedia.bulbagarden.net/wiki/Giovanni%27s_Last_Resort_(Gym_Challenge_105)
return new
    #[Title('Last Resort')]
    #[Concept('Upkeep')]
    #[IsIncomplete]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.flavortext>Now is not the time to panic.</x-card.flavortext>

    <x-card.cardrule :>
<x-card.smallrule>Cannot be played with a shared Library.</x-card.smallrule>
<x-card.normalrule>Discard any number of cards from the top</x-card.normalrule>
<x-card.normalrule>of your Library to remove 1 @damage per card</x-card.normalrule>
<x-card.normalrule>from one of your Monsters.</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
