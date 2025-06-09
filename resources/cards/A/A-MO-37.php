<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Motorcycle Gang Leader')]
#[Concept('Mobster')]
#[Concept('Boss')]
#[Concept('Male')]
#[Concept('DamageCapacity', 15)]
#[Concept('Size', 6)]
#[Concept('Speed', 2)]
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
