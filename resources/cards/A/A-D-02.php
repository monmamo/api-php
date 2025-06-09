<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[ImageCredit('Icon by Carl Olsen on Game-Icons.net')]
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

<x-card.phaserule type="Resolution" >
    <text >
<x-card.ruleline>For each Fire (A-002) attached to</x-card.ruleline>
<x-card.ruleline>this Monster, prevent Boost damage.</x-card.ruleline>
<x-card.ruleline>Discard all Fire attached to this Monster</x-card.ruleline>
<x-card.ruleline class="smallrule">(even if they weren't needed to prevent damage).</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
