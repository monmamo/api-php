<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Greybeast')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 22)]
    #[Concept('Level', 42)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 2)]
    #[Concept('Boost', '3')]
    #[LocalHeroImage('hero/A-M-16.png')]
    #[IsGeneratedImage]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        { 
            yield <<<'HTML'
<x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Gouros</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Resolution" height="210">
<x-card.skilltitle>Nightmare Fuel</x-card.skilltitle>
<text  y="<?= config('card-design.titlebox.title-height')?>" height="105">
<x-card.normalrule>Every Monster that does not use an</x-card.normalrule>
<x-card.normalrule>Attack, Defense or Skill during the turn</x-card.normalrule>
<x-card.normalrule>loses 3 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;

yield \App\Strings\html(
    'text',
    ['x' => '50%', 'y' => '270','transform'=>'rotate(-30,375,270)', 'text-anchor' => 'middle', 'dominant-baseline'=>"central" ,'font-family'=>"'Roboto Condensed', sans-serif" , 'font-size'=>"80px", 'fill' => '#ffffff','stroke'=>'#000000','stroke-width'=>'2'],
    'ART IN PROGRESS',
)->toHtml();
        }
    };
