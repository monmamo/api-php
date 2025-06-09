<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Flee')]
#[Concept('Defense')]
#[Concept('Level', 5)]
#[Concept('Cost', 1)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
            <x-card.hero.local>hero/well-bye.jpg</x-card.hero.local>

    <x-card.cardrule :>
    <x-card.ruleline>Discard the Monster and all cards</x-card.ruleline>
    <x-card.ruleline>attached to it.</x-card.ruleline>
    <x-card.ruleline class="smallrule">This counts as Knocking Out the Monster.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
