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
#[Title('Criminal Mastermind')]
#[Concept('Mobster')]
#[Concept('Integrity')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="110" >
<x-card.normalrule>Draw phase: Search your Library for any card.</x-card.normalrule>
<x-card.normalrule>You may take another Draw phase.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
