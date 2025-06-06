<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Forest Fire')]
#[Concept('Catastrophe')]
#[ImageCredit('')]

#[Prerequisites(['This card can be played only if the Place in play is a Forest and when a Monster uses an attack that results in the discarding of Fire (A-002)s.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="220" >
<x-card.normalrule>Each player discards 3 cards from the top of his Library.</x-card.normalrule>
<x-card.normalrule>Discard the Place card in play.</x-card.normalrule>
<x-card.normalrule>Discard all Mobster and Bystander cards in play.</x-card.normalrule>
<x-card.normalrule>Discard all Item cards in play.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
