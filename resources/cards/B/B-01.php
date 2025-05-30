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
<x-card.cardrule y="580" :lines="1">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        </x-card.cardrule>

        <x-card.phaserule type="Resolution" y="135" height="100">
            <text >
                <x-card.normalrule>If this Monster is wearing a Garment,</x-card.normalrule> 
                <x-card.normalrule>it takes 1d4 @damage.</x-card.normalrule>
            </text>
        </x-card.phaserule>
HTML;
    }
};
