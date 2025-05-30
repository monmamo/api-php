<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Mascot')]
#[Concept('Bystander')]
#[Concept('Integrity', 2)]
#[Concept('DamageCapacity', 10)]
#[Concept('Size', 3)]
#[Concept('Speed', 3)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule y="580" :lines="1">
     <x-card.smallrule>{{ trans_choice('rules.player-limit',1) }}</x-card.smallrule>
 </x-card.cardrule>

<x-card.phaserule type="Resolution" lines="2">
    <text >
    <x-card.normalrule>Your Monsters’ Attacks</x-card.normalrule>
        <x-card.normalrule>do +1 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
    }
};
