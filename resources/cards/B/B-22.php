<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Hurricane')]
#[Concept('Catastrophe')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(hero/hurricane.jpg)" />

<x-card.flavortext>Hope your Insurance (A-069) is paid up.</x-card.flavortext>

    <text y="440" filter="url(#solid)">
<x-card.ruleline class="smallrule">This card can be played only if Summer </x-card.ruleline>
<x-card.ruleline class="smallrule">or Autumn is on the Battlefield.</x-card.ruleline>
<x-card.ruleline>Each player discards 2d6 cards</x-card.ruleline>
<x-card.ruleline>from the top of his Library.</x-card.ruleline>
<x-card.ruleline>If the Place card on the Battlefield</x-card.ruleline>
<x-card.ruleline>is a Venue or Facility card, discard it.</x-card.ruleline>
<x-card.ruleline>Discard all Mobster, Bystander & Item cards</x-card.ruleline>
<x-card.ruleline>on the Battlefield</x-card.ruleline>
<x-card.ruleline>that are not attached to Monsters.</x-card.ruleline>
<x-card.ruleline>Shuffle all Item cards attached to Monsters</x-card.ruleline>
<x-card.ruleline>into the Library.</x-card.ruleline>
    </text>
HTML;
    }
};
