<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Permanent Blindness')]
    #[Concept('Bane')]
    #[Concept('Physical')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule y="580" :lines="2">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        <x-card.smallrule>You may play this card only with an Attack.</x-card.smallrule>
        </x-card.cardrule>

        <x-card.phaserule type="Resolution" height="135">
            <text >
<x-card.normalrule>TODO</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
