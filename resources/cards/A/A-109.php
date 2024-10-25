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

// <x-card :$cardNumber card-name="Recall the Wounded" >

//     <x-card.phaserule type="Upkeep"  height="150"><text >    
//         <x-card.normalrule>Shuffle your Knocked Out Monsters</x-card.normalrule>
//         <x-card.normalrule>into your Library. </x-card.normalrule>
//         <x-card.smallrule>The Monsters still count as Knocked Out for</x-card.smallrule> 
//             <x-card.smallrule>the purpose of resolving the match.</x-card.smallrule>
//     </text></x-card.phaserule>  </x-card>