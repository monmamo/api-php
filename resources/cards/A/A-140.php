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
<x-card.ruleline class="smallrule">Cannot be played with a shared Library.</x-card.ruleline>
<x-card.ruleline>Discard any number of cards from the top</x-card.ruleline>
<x-card.ruleline>of your Library to remove 1 @damage per card</x-card.ruleline>
<x-card.ruleline>from one of your Monsters.</x-card.ruleline>
</x-card.cardrule>
HTML;
        }
    };
