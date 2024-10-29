<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Snitch')]
#[Concept('Upkeep')]
#[ImageCredit('')]
#[FlavorText([])]
#[LocalHeroImage('TODO.png')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="150" >
<x-card.smallrule>You may play this card only if you have a Master, Mobster or Bystande card on the Battlefield.</x-card.smallrule>
<x-card.normalrule>Attach this card to one of those cards.</x-card.normalrule>
<x-card.normalrule>Choose one opponent. That opponent must show you their hand. (Only you get to see the hand.)</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
