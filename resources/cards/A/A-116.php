<?php

use App\CardAttributes\ConceptIconHeroImage;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('TODO')]
#[Concept('TODO')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <text y="500" filter="url(#solid)">TODO</text>
HTML;
    }
};

// @push('background')
// {{ view('Draw.background') }}
// 'flavor-text' => [
// ],
// <x-card.image-credit>
// Image by Delapouite on Game-Icons.net under CC BY 3.0
// </x-card.image-credit>
// @endpush
// <x-card :$cardNumber card-name="Hard Reset">
// <g class="svg-hero">{{ view('Undo.icon') }}</g>

// <x-card.phaserule type="Draw" height="130" >
//     <text>
// <x-card.normalrule>Each player shuffles all</x-card.normalrule>
//     <x-card.normalrule>discarded cards into his or her Library. </x-card.normalrule>
//         <x-card.normalrule>This card goes into Exile.</x-card.normalrule>
// </text>
// </x-card.phaserule>
// </x-card>