<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Stitches')]
#[Concept('Upkeep')]
#[ImageCredit('')]
#[FlavorText([])]
#[LocalHeroImage('TODO.png')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="95" >
<x-card.smallrule>You may play this card only if you have a Mobster card on the Battlefield.</x-card.smallrule>
<x-card.normalrule>Discard any card with Snitch (MOB-17) attached and all cards attached to those cards.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
