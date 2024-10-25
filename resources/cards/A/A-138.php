<?php
// https://www.freepik.com/free-vector/lottery-ticket-concept-illustration_171056284.htm

use App\CardAttributes\ConceptIconHeroImage;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Mana Lottery')]
#[Concept('Vendor')]
#[Concept('Integrity',2)]
#[ImageCredit('Image by storyset on Freepik')]
#[FlavorText('FLAVOR_TEXT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A146.jpg)" />
    <x-card.phaserule type="Draw" lines="6"><text>    
<x-card.normalrule>Discard 2+ cards from your hand.</x-card.normalrule>
<x-card.normalrule>Lay your hand aside. Draw twice as many</x-card.normalrule>
<x-card.normalrule>cards as you discarded. You may reveal any</x-card.normalrule>
<x-card.normalrule>Mana cards you draw and put them in your </x-card.normalrule>
<x-card.normalrule>hand. Put the remaining cards at the bottom</x-card.normalrule>
<x-card.normalrule>of your Library, then shuffle your Library.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
    }
};





    
