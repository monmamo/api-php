<?php

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

// 'flavor-text' => [
//     'The less we hear from them, the better they are serving us.'
// ],

// 'image-credit' => "Placeholder image",

// <x-card :$cardNumber :$dx :$dy card-name="Idiot Agents">
//     <image x="0" y="0" class="hero" href="@local(A128.png)" />

// 'concepts' => ['Draw'],
// 'concepts' => ['Integrity'],
// <x-card.phaserule type="Draw" lines="3"><text>
//         <x-card.normalrule>Choose an opponent. </x-card.normalrule>
//             <x-card.normalrule>That opponent removes all Monster cards</x-card.normalrule>
//         <x-card.normalrule>from his Library and puts them in Discard.</x-card.normalrule>
//     </text></x-card.phaserule>
