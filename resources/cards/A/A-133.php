<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Mascot')]
#[Concept('Bystander')]
#[Concept('Integrity',2)]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'


<text y="500" filter="url(#solid)">
     <x-card.smallrule>{{ trans_choice('rules.player-limit',1) }}</x-card.smallrule>
 </text>

<x-card.phaserule type="Resolution" lines="2">
    <text >
<x-card.normalrule>Your Monster's attacks </x-card.normalrule>
    <x-card.normalrule>do an additional 1d4 damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
    }
};
