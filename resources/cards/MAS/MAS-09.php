<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Buffet')]
#[Concept('Vendor')]
#[ImageCredit('')]
#[FlavorText([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule lines="4" >
<x-card.normalrule>Search your Library for</x-card.normalrule>
<x-card.normalrule>any number of distinct Mana cards</x-card.normalrule>
<x-card.normalrule>& put them into your hand.</x-card.normalrule>
<x-card.normalrule>Shuffle your Library.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</x-card.cardrule>
HTML;
    }
};
