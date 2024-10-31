<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Dual Cranial Horns')]
#[Concept('Trait')]
#[Concept('Physical')]
#[Concept('Size', '+6')]
#[Prerequisites(y: 490)]
#[ImageCredit('Image by wirestock on Freepik')]
#[LocalHeroImage('A064.jpg')] // https://www.freepik.com/free-photo/closeup-shot-beautiful-thompson-s-gazelle_10292458.htm
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.phaserule type="Attack" height="140">
<text x="<?= config('card-design.titlebox.text_x')(false) ?>" y="<?= config('card-design.titlebox.title-height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="middle">Horn Attack</text>
<text  y="<?= config('card-design.titlebox.title-height')?>"  height="35">
<x-card.normalrule>Does Speed×2 damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
