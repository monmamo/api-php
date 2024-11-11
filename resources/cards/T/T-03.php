<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Steammaker')]
#[Concept('Trait')]
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
<x-card.normalrule>the damage that would be done by the fire attack</x-card.normalrule>
<x-card.normalrule>or skill (and only that damage) is taken</x-card.normalrule>
<x-card.normalrule>by the attacking Monster instead.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
