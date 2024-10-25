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

// {{-- Compare Spy Drone (A-089). --}}
// {{--inspiration:: Hand Scope https://bulbapedia.bulbagarden.net/wiki/Hand_Scope_(Phantom_Forces_96) --}} 

// @push('background') 
// {{ view('Item.background') }}
// 'flavor-text' => [
// 'Here's lookin' at you, kid.'
// ],
// @endpush

// <x-card :$cardNumber card-name="Hand Scope">
    

//     'concepts' => ['Item'],
    
//     <x-card.phaserule type="Upkeep"  height="130"><text >    
//         <x-card.normalrule>Roll 1d4. If @dieroll(4), you may ask </x-card.normalrule>
// <x-card.normalrule>one opponent to show you their hand.</x-card.normalrule>
// <x-card.normalrule>(Only you get to see the hand.)</x-card.normalrule>
// </text></x-card.phaserule>  </x-card>
