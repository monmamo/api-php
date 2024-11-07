<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Sprinkler System')]
#[Concept('Upkeep')]
#[ImageCredit('')]
#[FlavorText([])]
#[Prerequisites([])]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="40" >
<x-card.smallrule>Discard all Fire and Fire-type cards on the Battlefield.</x-card.smallrule>
</x-card.cardrule>
HTML;
    }
};
