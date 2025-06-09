<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsIncomplete;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[IsIncomplete]
#[Title('Steammaker')]
#[Concept('Trait')]
#[Concept('Cost', 3)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
Requires Aquos.
        <x-card.phaserule type="Resolution" >
<text>
<x-card.ruleline>If hit by a fire attack or skill,</x-card.ruleline>
<x-card.ruleline>the damage that would be done by the fire</x-card.ruleline>
<x-card.ruleline>attack or skill (and only that damage) is</x-card.ruleline>
<x-card.ruleline>taken by the attacking Monster instead.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
    }
};
