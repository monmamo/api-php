<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Cresting Wave')]
#[Concept('Attack')]
#[ImageCredit('')]

#[Prerequisites(lines: ['Requires Aquos.', 'Can be used only at an Ocean.'], y: 460)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>Summons a large wave, carrying the force of the ocean to sweep away opponents.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
