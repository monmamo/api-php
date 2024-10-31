<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Hurricane')]
#[Concept('Catastrophe')]
#[FlavorText('Hope your Insurance (A-069) is paid up.')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(hero/hurricane.jpg)" />
    <text y="440" filter="url(#solid)">
    <x-card.smallrule>This card can be played only if Summer </x-card.smallrule>
        <x-card.smallrule>or Autumn is on the Battlefield.</x-card.smallrule>
    <x-card.normalrule>Each player discards 2d6 cards</x-card.normalrule>
        <x-card.normalrule>from the top of his Library.</x-card.normalrule>
    <x-card.normalrule>If the Place card on the Battlefield </x-card.normalrule>
        <x-card.normalrule>is a Venue or Facility card, discard it.</x-card.normalrule>
    <x-card.normalrule>Discard all Mobster, Bystander & Item cards</x-card.normalrule>
        <x-card.normalrule>on the Battlefield</x-card.normalrule>
    <x-card.normalrule>that are not attached to Monsters.</x-card.normalrule>
    <x-card.normalrule>Shuffle all Item cards attached to Monsters</x-card.normalrule>
        <x-card.normalrule>into the Library.</x-card.normalrule>
    </text>
HTML;
    }
};
