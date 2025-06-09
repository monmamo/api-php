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
<x-card.cardrule>
     <x-card.ruleline class="smallrule">{{ trans_choice('rules.player-limit',1) }}</x-card.ruleline>
 </x-card.cardrule>

<x-card.phaserule type="Resolution" >
    <text >
    <x-card.ruleline>Your Monsters’ Attacks</x-card.ruleline>
        <x-card.ruleline>do +1 @damage.</x-card.ruleline>
</text>
</x-card.phaserule>

HTML;
    }
};
