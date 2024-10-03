<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Energy Shield')]
#[Concept('Defense')]
#[ImageCredit('Image by Lorc on Game-Icons.net under CC BY 3.0')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <g class="svg-hero"><?= view('Energos.icon') ?></g>

        <x-slot:small>Requires Energos.</x-slot:small>
        <text>
            <x-card.normalrule>For each Energy card attached to this Monster,</x-card.normalrule>
            <x-card.normalrule>prevent 1d6 damage. Discard all Energy</x-card.normalrule>
            <x-card.normalrule>cards attached to this Monster</x-card.normalrule>
            <x-card.normalrule>(even if they weren't needed to prevent damage).</x-card.normalrule>
        </text>
HTML;
    }
};
