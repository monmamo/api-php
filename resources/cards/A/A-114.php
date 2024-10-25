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

//     Image by freepik

// <x-card :$cardNumber card-name="Personal Assistant">
    
//     <image x="0" y="0" class="hero" href="@local(hero/personal-assistant.jpg)" />
//     'concepts' => ['Bystander'],
//     'concepts' => ['Cumulative'],
//         'concepts' => ['Integrity'],

//         <text y="500" filter="url(#solid)">
//             <x-card.smallrule>A player may have any number of Personal Assistants</x-card.smallrule>
//                 <x-card.smallrule> on the Battlefield. You may choose to make this card Male or Female</x-card.smallrule>
//                 <x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
//             </text>
        
//             <x-card.phaserule type="Draw" height="130" badge="Repeat">
//                 <text>
//                 <x-card.normalrule>Draw a card. If you drew any cards </x-card.normalrule>
//                 <x-card.normalrule>in this way, discard an equal number of </x-card.normalrule>
//                 <x-card.normalrule>cards from your hand.</x-card.normalrule>
//             </text>
//         </x-card.phaserule>
// </x-card>
