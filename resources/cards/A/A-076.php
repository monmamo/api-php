<?php

// inspiration: Brock's Primeape's "Scram" power.

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Scram')]
#[Concepts('Skill')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(hero/well-bye.jpg)" />

<text y="500" filter="url(#solid)">
    <x-card.smallrule>May not be used if the Monster is under any Bane.</x-card.smallrule>
    <x-card.normalrule>Shuffle the Monster and all cards</x-card.normalrule>
    <x-card.normalrule>attached to it back into your Library.</x-card.normalrule>
    <x-card.smallrule>This counts as Knocking Out the Monster.</x-card.smallrule>
</text>
HTML;
    }
};
