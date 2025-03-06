<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Mascot')]
#[Concept('Bystander')]
#[Concept('Integrity', 2)]
#[Concept('DamageCapacity', 10)]
#[Concept('Size', 3)]
#[Concept('Speed', 3)]
//#[ImageCredit('IMAGE_CREDIT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text y="495" filter="url(#solid)">
     <x-card.smallrule>{{ trans_choice('rules.player-limit',1) }}</x-card.smallrule>
 </text>

<x-card.phaserule type="Resolution" lines="2">
    <text >
    <x-card.normalrule>Your Monsters’ Attacks</x-card.normalrule>
        <x-card.normalrule>do +1 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
    }
};
