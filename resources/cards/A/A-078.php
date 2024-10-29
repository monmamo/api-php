<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Grotesque Mouth')]
#[Concept('Trait')]
#[ImageCredit('Adobe Stock #2910609')]
#[FlavorText('FLAVOR_TEXT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(hero/AdobeStock_2910609.jpeg)" />

    <text y="70" filter="url(#solid)">
    <x-card.normalrule>Size +1.</x-card.normalrule>
    </text>

    <svg id="titlebox" x="50" y="630" width="550" height="165" viewBox="0 0 550 165">
        <rect x="0" y="0" width="550" height="165" fill="#FFFFFF" fill-opacity="0.75" />
        <x-card.titlebox.icon card-type="Attack" />

        <text x="345" y="30" text-anchor="middle" class="cardtype" alignment-baseline="hanging">ATTACK</text>
        <text x="345" y="90" text-anchor="middle" class="cardname" alignment-baseline="middle">Bite</text>
        <text x="345" y="140" text-anchor="middle" font-size="30px" alignment-baseline="baseline">Does Speed×3 damage.</text>
    </svg>
HTML;
    }
};
