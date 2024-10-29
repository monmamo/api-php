<?php

// inspiration:: Erika's Hospitality PTCG card https://bulbapedia.bulbagarden.net/wiki/Erika%27s_Hospitality_(Team_Up_174)

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Hospitality')]
#[Concept('Draw')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text y="500" filter="url(#solid)">
<x-card.smallrule>You can play this card only if you have </x-card.smallrule>
<x-card.smallrule>4 or fewer other cards in your hand.</x-card.smallrule>
<x-card.normalrule>Draw a card for each opposing Monster</x-card.normalrule>
<x-card.normalrule>on the Battlefield.</x-card.normalrule>
</text>
HTML;
    }
};

//     <image x="0" y="0" class="hero" href="@local(TODO.png)" />
