<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Pirate')]
#[Concept('Mobster')]
#[Concept('Boss')]
#[Concept('DamageCapacity', 13)]
#[Concept('Size', 4)]
#[Concept('Speed', 4)]
#[Concept('Training', 5)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
HTML;

        yield <<<'HTML'
    <x-card.cardrule>
        <x-card.ruleline class="smallrule">{{\trans_choice('rules.player-limit', 1)}}</x-card.ruleline>
    </x-card.cardrule>
HTML;
    }
};
