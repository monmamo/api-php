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
#[Title("Boss's Orders")]
#[Concept('Bane')]
#[LocalHeroImage('TODO.png')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="95" >
<x-card.smallrule>You may use this card only if you have a Boss card in play.</x-card.smallrule>
<x-card.normalrule>This Monster may not use any Attack while it is in play.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
