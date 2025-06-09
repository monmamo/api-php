<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Consigliere')]
#[Concept('Mobster')]
#[Concept('Male')]
#[Concept('DamageCapacity', 10)]
#[Concept('Size', 4)]
#[Concept('Speed', 2)]
#[Concept('Cost', 7)]
#[Concept('Training', 7)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.flavortext y="530">
    <x-card.flavortext.line>Member of a Crime Family.</x-card.flavortext.line>
    <x-card.flavortext.line>Advises the Don and resolves disputes within the family.</x-card.flavortext.line>
    </x-card.flavortext>

                <x-card.cardrule lines="5">
<x-card.ruleline class="smallrule">{{\trans_choice('rules.player-limit', 1)}}</x-card.ruleline>
<x-card.ruleline class="smallrule">You must already have a Don on the Battlefield</x-card.ruleline>
<x-card.ruleline class="smallrule">to put this card on the Battlefield.</x-card.ruleline>
<x-card.ruleline>Resolution phase: You may reroll any dice roll and take the result of either the original roll or the reroll.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
