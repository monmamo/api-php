<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Impostor Syndrome')]
    #[Concept('Bane')]
    #[Concept('Mental')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule>
        <x-card.ruleline class="smallrule">{{trans_choice('rules.monster-limit',1)}}</x-card.ruleline>
        </x-card.cardrule>

    <x-card.phaserule type="Resolution" >
        <text >
            <x-card.ruleline>Attack -1d6.</x-card.ruleline>
                <x-card.ruleline>Defense -1d6.</x-card.ruleline>
    </text>
</x-card.phaserule>
HTML;
    }
};
