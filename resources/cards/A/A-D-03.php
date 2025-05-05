<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Energy Shield')]
#[Concept('Defense')]
#[Concept('Energos')]
#[Concept('Level', 20)]
#[ImageCredit('Image by Lorc on Game-Icons.net under CC BY 3.0')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
            <x-card.hero.svg>{{ \view('Energos.icon') }}</x-card.hero.svg>

            <x-card.phaserule type="Resolution" lines="4">
    <text >
<x-card.normalrule>For each Energy (A-003) attached to</x-card.normalrule>
<x-card.normalrule>this Monster, prevent Boost @damage.</x-card.normalrule>
<x-card.normalrule>Discard all Energy attached to this Monster</x-card.normalrule>
<x-card.smallrule>(even if they weren't needed to prevent damage).</x-card.smallrule>
</text>
</x-card.phaserule>
HTML;
    }
};
