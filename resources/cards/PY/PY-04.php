<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Fire Boost')]
#[Concept('Upkeep')]
#[ImageCredit('')]
#[FlavorText([])]
#[LocalHeroImage('TODO.png')]
#[Prerequisites([])]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>Discard any number of cards. </x-card.normalrule>
<x-card.normalrule>For each card you discarded, you may attach a </x-card.normalrule>
<x-card.normalrule>Fire card from your hand to </x-card.normalrule>
<x-card.normalrule>a Pyros Monster.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
