<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Hard Reset')]
#[Concept('Draw')]
#[ImageCredit('Image by Delapouite on Game-Icons.net under CC BY 3.0')]
#[FlavorText('FLAVOR_TEXT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <text y="500" filter="url(#solid)">TODO</text>
HTML;
    }
};

// <g class="svg-hero">{{ view('Undo.icon') }}</g>

// <x-card.phaserule type="Draw" height="130" >
//     <text>
// <x-card.normalrule>Each player shuffles all</x-card.normalrule>
//     <x-card.normalrule>discarded cards into his or her Library. </x-card.normalrule>
//         <x-card.normalrule>This card goes into Exile.</x-card.normalrule>
// </text>
// </x-card.phaserule>
