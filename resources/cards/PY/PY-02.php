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
#[Title('Call of Fire')]
#[Concept('Draw')]
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
<x-card.normalrule>Search your Library for a Pyros Monster. </x-card.normalrule>
<x-card.normalrule>Reveal it, then put it in your hand. </x-card.normalrule>
<x-card.normalrule>Then, shuffle your Library.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
