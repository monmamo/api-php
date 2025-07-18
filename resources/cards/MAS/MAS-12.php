<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Generous Fan')]
#[Concept('Bystander')]
#[Concept('Integrity', '1')]
#[ImageCredit('')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Draw" ><text>
<x-card.normalrule>You may draw a card and</x-card.normalrule>
<x-card.normalrule>take another Draw phase.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
