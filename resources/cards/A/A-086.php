<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Water Pulse')]
#[Concepts('Trait')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <g class="svg-hero"><?= view('Aquos.icon') ?></g>

    <text y="500" filter="url(#solid)">
        <x-card.smallrule>Requires Aquos.</x-card.smallrule>
<x-card.smallrule>Use when this Monster attacks or defends.</x-card.smallrule>
<x-card.normalrule>When resolving, discard 1d6 Water cards</x-card.normalrule>
<x-card.normalrule>from this Monster. The defending or attacking </x-card.normalrule>
<x-card.normalrule>Monster takes 1d6 damage for each Water </x-card.normalrule>
<x-card.normalrule>card actually discarded.</x-card.normalrule>
    </text>
HTML;
    }
};
