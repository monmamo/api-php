<?php

// https://www.freepik.com/free-vector/lottery-ticket-concept-illustration_171056284.htm

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Mana Lottery')]
#[Concept('Vendor')]
#[Concept('Integrity', 2)]
#[ImageCredit('Image by storyset on Freepik')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A146.jpg)" />
    <x-card.phaserule type="Draw" lines="6"><text>
<x-card.ruleline>Discard 2+ cards from your hand.</x-card.ruleline>
<x-card.ruleline>Lay your hand aside. Draw twice as many</x-card.ruleline>
<x-card.ruleline>cards as you discarded. You may reveal any</x-card.ruleline>
<x-card.ruleline>Mana cards you draw &amp; put them in your</x-card.ruleline>
<x-card.ruleline>hand. Put the remaining cards at the bottom</x-card.ruleline>
<x-card.ruleline>of your Library, then shuffle your Library.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Vendor')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
