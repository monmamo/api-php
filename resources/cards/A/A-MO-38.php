<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Warlord')]
#[Concept('Mobster')]
#[Concept('Boss')]
#[Concept('Male')]
#[Concept('DamageCapacity', 14)]
#[Concept('Size', 5)]
#[Concept('Speed', 3)]
#[Concept('Training', 5)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.cardrule>
        <x-card.ruleline class="smallrule">{{\trans_choice('rules.player-limit', 1)}}</x-card.ruleline>
    </x-card.cardrule>
HTML;
    }
};
