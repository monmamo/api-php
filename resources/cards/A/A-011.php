<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Flash of Lightning')]
    #[Concept('Skill')]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
        <g class="svg-hero"><?= view('Energos.icon') ?></g>

    <text y="500" filter="url(#solid)">
    <x-card.smallrule>Requires Energos.</x-card.smallrule>
</text>

<x-card.phaserule type="Resolution" lines="6"><text>
<x-card.normalrule>Discard all Electricity cards attached</x-card.normalrule>
    <x-card.normalrule>to this Monster. Each other Monster</x-card.normalrule>
    <x-card.normalrule>on the Battlefield takes 1d6 damage</x-card.normalrule>
    <x-card.normalrule>for each Electricity card discarded.</x-card.normalrule>
    <x-card.normalrule>Only this Monster may attack until &</x-card.normalrule>
    <x-card.normalrule>through this player’s next turn.</x-card.normalrule>
    </text></x-card.phaserule>
HTML;
        }
    };
