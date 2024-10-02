<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\CardAttributes\PrerequisiteY;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Concepts('Trait')]
#[Prerequisites('Requires Aquos.')]
#[PrerequisiteY(400)]
#[Title('Absorb Water')]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<g class="svg-hero"><?= view('Aquos.icon') ?></g>

<x-card.phaserule type="Resolution" height="175">
    <text >
<x-card.normalrule>If hit by an Attack that results in </x-card.normalrule>
<x-card.normalrule>the attacker discarding Water, </x-card.normalrule>
<x-card.normalrule>attach those cards to this Monster.</x-card.normalrule>
<x-card.smallrule>When those cards are discarded, they go </x-card.smallrule>
<x-card.smallrule>to the Discard of the player who owns them.</x-card.smallrule>
    </text>
</x-card.phaserule>
HTML;
        }
    };
