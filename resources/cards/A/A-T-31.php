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
        <x-card.phaserule type="Resolution" height="210">
<text>
<x-card.normalrule>If hit by a fire attack or skill,</x-card.normalrule>
<x-card.normalrule>the damage that would be done by the fire</x-card.normalrule>
<x-card.normalrule>attack or skill (and only that damage) is</x-card.normalrule>
<x-card.normalrule>taken by the attacking Monster instead.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
