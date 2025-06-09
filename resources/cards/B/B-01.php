<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Fabric Allergy')]
    #[Concept('Bane')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule>
        <x-card.ruleline class="smallrule">{{trans_choice('rules.monster-limit',1)}}</x-card.ruleline>
        </x-card.cardrule>

        <x-card.phaserule type="Resolution" y="135" >
            <text >
                <x-card.ruleline>If this Monster is wearing a Garment,</x-card.ruleline> 
                <x-card.ruleline>it takes 1d4 @damage.</x-card.ruleline>
            </text>
        </x-card.phaserule>
HTML;
    }
};
