<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Monstermeal Subscription Service')]
#[Concept('Vendor')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>Search your Library for a Consumable</x-card.normalrule>
<x-card.normalrule>card with Monstermeal in its name.</x-card.normalrule>
<x-card.normalrule>Reveal that/those card(s). Put that/those</x-card.normalrule>
<x-card.normalrule>card(s) in your hand. Shuffle your Library.</x-card.normalrule>
<x-card.normalrule>After using this card, put this card at</x-card.normalrule>
<x-card.normalrule>the bottom of your Library.  You may take another Draw phase.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
