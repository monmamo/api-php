<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsIncomplete;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[IsIncomplete]
#[Title('Fragrance')]
#[Concept('Trait')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.flavortext>Thank you for bathing your monster.</x-card.flavortext>

<x-card.cardrule lines="6">
<x-card.ruleline>Fragrance Strength: 1d6</x-card.ruleline>
<x-card.ruleline>(rolled at attach; can be increased by Power Up)</x-card.ruleline>
<x-card.ruleline>Reduce damage done by any</x-card.ruleline>
<x-card.ruleline>Monsters' Attacks by Fragrance Strength.</x-card.ruleline>
<x-card.ruleline>Reduce damage prevented by any</x-card.ruleline>
<x-card.ruleline>Monsters' Defenses by Fragrance Strength.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
