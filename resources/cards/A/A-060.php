<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Prerequisites('Requires Pyros and Level 40.')]
#[Title('Flamethrower Attack')]
#[Concept('Attack')]
#[FlavorText('Flamethrower the placeholder image.')]
#[LocalHeroImage('hero/flamethrower.jpeg')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'

<x-card.phaserule type="Command" y="550" lines="2">
        <text >
<x-card.normalrule>Discard any number of Fire cards </x-card.normalrule>
<x-card.normalrule>attached to the Monster using this attack.</x-card.normalrule>
</text>
    </x-card.phaserule>

<x-card.phaserule type="Resolution" lines="2">
        <text >
<x-card.normalrule>Does 26d damage for </x-card.normalrule>
<x-card.normalrule>each Fire card discarded.</x-card.normalrule>
    </text>
    </x-card.phaserule>
HTML;
    }
};
