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
#[LocalHeroImage('hero/dire-form.png')]
#[ImageCredit('Image by freepik')] // https://www.freepik.com/free-vector/hand-drawn-werewolf-silhouette_59740170.htm
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;
};
