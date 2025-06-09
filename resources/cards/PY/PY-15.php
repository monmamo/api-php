<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Smog')]
#[Concept('Defense')]
#[ImageCredit('')]

#[Prerequisites(['Requires Pyros.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>Discard at least one Smoke and at least one Water card attached to this Monster. Prevent 1d6 @damage for each Smoke or Water card discarded.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
