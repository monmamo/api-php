<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Masseuse')]
#[Concept('Bystander')]
#[Concept('Female')]
#[Concept('Integrity', 2)]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.flavortext>Touch is the best medicine.</x-card.flavortext>

<x-card.cardrule y="580" :lines="1">
<x-card.smallrule>{{ trans_choice('rules.player-limit',1) }}</x-card.smallrule>
        </x-card.cardrule>

<x-card.phaserule type="Resolution" :lines="3">
    <text >
<x-card.normalrule>After all attacks & skills</x-card.normalrule>
<x-card.normalrule>are resolved, restore 4 @damage to each</x-card.normalrule>
<x-card.normalrule>of your Monsters that is not Knocked Out.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
