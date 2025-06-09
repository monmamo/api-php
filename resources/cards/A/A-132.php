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

<x-card.cardrule>
<x-card.ruleline class="smallrule">{{ trans_choice('rules.player-limit',1) }}</x-card.ruleline>
        </x-card.cardrule>

<x-card.phaserule type="Resolution" :>
    <text >
<x-card.ruleline>After all attacks &amp; skills</x-card.ruleline>
<x-card.ruleline>are resolved, restore 4 @damage to each</x-card.ruleline>
<x-card.ruleline>of your Monsters that is not Knocked Out.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
    }
};
