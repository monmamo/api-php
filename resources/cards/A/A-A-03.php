<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Flamethrower Attack')]
#[Concept('Attack')]
#[Concept('Pyros')]
#[Concept('Level', 40)]
#[ImageCredit('Flamethrower the placeholder image.')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>hero/flamethrower.jpeg</x-card.hero.local>

<x-card.flavortext>The kids love this one.</x-card.flavortext>

<x-card.phaserule type="Command" y="585" lines="2">
        <text >
<x-card.normalrule>Discard any number of Fire (A-002)</x-card.normalrule>
<x-card.normalrule>attached to the Monster using this attack.</x-card.normalrule>
</text>
    </x-card.phaserule>

<x-card.phaserule type="Resolution" lines="2">
        <text >
<x-card.normalrule>Does 16d damage for</x-card.normalrule>
<x-card.normalrule>each Fire discarded.</x-card.normalrule>
    </text>
    </x-card.phaserule>
HTML;
    }
};
