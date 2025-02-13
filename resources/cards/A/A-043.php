<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Creepy Guy in the Alley')]
#[Concept('Vendor')]
#[Concept('Integrity','2')]
#[FlavorText('Psst. I got a great deal for you.')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Draw" lines="2">
<text >
<x-card.normalrule>Draw 2 cards</x-card.normalrule>
<x-card.normalrule>from the bottom of your Library.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
    }
};
