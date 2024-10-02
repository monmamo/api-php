<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Water Shield')]
#[Concepts('Defense')]
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
<x-card.normalrule>For each Water card attached to this Monster,</x-card.normalrule>
<x-card.normalrule>prevent 1d6 damage. Discard all Water cards</x-card.normalrule>
<x-card.normalrule>attached to this Monster</x-card.normalrule>
<x-card.normalrule>(even if they weren't needed to prevent damage).</x-card.normalrule>
    </text>
HTML;
}
};
