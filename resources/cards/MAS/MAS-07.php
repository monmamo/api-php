<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration: Energy Flow PTCG card https://bulbapedia.bulbagarden.net/wiki/Energy_Flow_(Gym_Heroes_122)
return new
#[Title('Mana Flow')]
#[Concept('Upkeep')]
#[ImageCredit('')]
#[FlavorText([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="165" >
<x-card.normalrule>For each of your Monsters,</x-card.normalrule>
<x-card.normalrule>you may return any number of Mana</x-card.normalrule>
<x-card.normalrule>cards attached to it to your hand.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
