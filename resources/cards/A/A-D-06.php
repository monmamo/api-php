<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Flee')]
#[Concept('Defense')]
#[Concept('Level', 5)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(hero/well-bye.jpg)" />

    <text y="495" filter="url(#solid)">
    <x-card.normalrule>Discard the Monster and all cards</x-card.normalrule>
    <x-card.normalrule>attached to it.</x-card.normalrule>
    <x-card.smallrule>This counts as Knocking Out the Monster.</x-card.smallrule>
</text>
HTML;
    }
};
