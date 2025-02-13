<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Masseuse')]
#[Concept('Bystander')]
#[Concept('Female')]
#[Concept('Integrity', 2)]
//#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('Touch is the best medicine.')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'

<text y="500" filter="url(#solid)">
<x-card.smallrule>{{ trans_choice('rules.player-limit',1) }}</x-card.smallrule>
        </text>

<x-card.phaserule type="Resolution" :lines="3">
    <text >
<x-card.normalrule>After all attacks & skills</x-card.normalrule>
<x-card.normalrule>are resolved, restore 4 @damage to each</x-card.normalrule>
<x-card.normalrule>of your Monsters that is not Knocked Out.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
