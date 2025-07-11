<?php

// inspiration: Brock's Primeape's "Scram" power.

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Scram')]
#[Concept('Skill')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
            <x-card.hero.local>hero/well-bye.jpg</x-card.hero.local>

            <x-card.cardrule  >
    <x-card.ruleline class="smallrule">May not be used if the Monster is under any Bane.</x-card.ruleline>
    <x-card.ruleline>Shuffle the Monster and all cards</x-card.ruleline>
    <x-card.ruleline>attached to it back into your Library.</x-card.ruleline>
    <x-card.ruleline class="smallrule">This counts as Knocking Out the Monster.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
