<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Diros')]
#[Concept('Taxon')]
#[Concept('Size', '+5')]
#[Concept('Speed', '+3')]
#[ImageCredit('Image by freepik')] // https://www.freepik.com/free-vector/hand-drawn-werewolf-silhouette_59740170.htm
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

//    <x-card.hero.local>hero/dire-form.png</x-card.hero.local>

};
