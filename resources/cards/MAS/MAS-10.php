<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Draw Coach')]
#[Concept('Bystander')]
#[Concept('Coach')]
#[Concept('Male')]
#[Concept('Integrity', '1d6')]
#[Prerequisites(['Limit 1 per player on Battlefield.', 'You must already have a Master on the Battlefield', 'to put this card on the Battlefield.', 'You may choose to make this card Female', 'when you put it on the Battlefield.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Draw" ><text>
<x-card.normalrule>For each card you draw, you may</x-card.normalrule>
<x-card.normalrule>look at the top 3 cards of your</x-card.normalrule>
<x-card.normalrule>Library. if you do this, you may put one</x-card.normalrule>
<x-card.normalrule>of those cards in your hand. The other</x-card.normalrule>
<x-card.normalrule>cards go to the bottom of your Library.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
    }
};
