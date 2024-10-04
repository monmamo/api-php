<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Sheriff')]
#[Concept('Bystander')]
#[Concept('Integrity', '2d6')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A245.png)" />

    <text y="500" filter="url(#solid)">
        <x-card.smallrule>Limit 1 on Battlefield among all players.</x-card.smallrule>
<x-card.smallrule>You may choose to make this card Male or Female </x-card.smallrule>
<x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
<x-card.normalrule>Discard all Mobster cards on the Battlefield.</x-card.normalrule>
<x-card.normalrule>No more Mobster or Criminal cards can be played </x-card.normalrule>
<x-card.normalrule>while this card is on the Battlefield.</x-card.normalrule>
</text>
HTML;
    }
};
