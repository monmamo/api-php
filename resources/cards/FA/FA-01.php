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
<x-card.phaserule type="Draw" lines="6"><text>
<x-card.ruleline>Search your Library for a Consumable</x-card.ruleline>
<x-card.ruleline>card with Monstermeal in its name.</x-card.ruleline>
<x-card.ruleline>Reveal that/those card(s). Put that/those</x-card.ruleline>
<x-card.ruleline>card(s) in your hand. Shuffle your Library.</x-card.ruleline>
<x-card.ruleline>After using this card, put this card at</x-card.ruleline>
<x-card.ruleline>the bottom of your Library.  You may take another Draw phase.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Vendor')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
