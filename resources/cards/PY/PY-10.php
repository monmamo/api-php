<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Smokescreen')]
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
<x-card.ruleline>Discard any number of Smoke cards attached to this Monster. Prevent 1d10 @damage for each Smoke card discarded.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
