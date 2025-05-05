<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[ImageCredit('Icon by Carl Olsen on Game-Icons.net under CC BY 3.0')]
#[Concept('Defense')]
#[Concept('Pyros')]
#[Concept('Level', 20)]
#[Title('Fire Shield')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.svg>{{ \view('Pyros.icon') }}</x-card.hero.svg>

<x-card.phaserule type="Resolution" lines="4">
    <text >
<x-card.normalrule>For each Fire (A-002) attached to</x-card.normalrule>
<x-card.normalrule>this Monster, prevent Boost damage.</x-card.normalrule>
<x-card.normalrule>Discard all Fire attached to this Monster</x-card.normalrule>
<x-card.smallrule>(even if they weren't needed to prevent damage).</x-card.smallrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
