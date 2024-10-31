<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Creative Academy')]
#[Concept('Venue')]
#[ImageCredit('Shutterstock #2348597925')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Upkeep" height="100">
    <text >
<x-card.normalrule>You may attach up to three Mana</x-card.normalrule>
<x-card.normalrule>cards per Monster (instead of just one).</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
