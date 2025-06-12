<?php

use App\CardAttributes\DeckbuilderBackground;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-photo/dna-representation-concept_44999157.htm

return new
#[Title('Gene Pool')]
#[Concept('Upkeep')]
#[Concept('Cost', 6)]
#[ImageCredit('Image by freepik')]
class(__FILE__) implements CardComponents
{
    use DeckbuilderBackground { DeckbuilderBackground::background insteadof DefaultCardAttributes; }
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>hero/gene-pool.jpg</x-card.hero.local>

<x-card.cardrule >
<x-card.ruleline>You may take one Trait card for free</x-card.ruleline>
<x-card.ruleline>on each turn.</x-card.ruleline>
</x-card.phaserule>
HTML;
    }
};
