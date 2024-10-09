<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title("Motorcycle Gang monster L43\n")]
#[Concept('Monster')]
#[Concept('Male')]
#[Concept('Level', '43')]
#[Concept('DamageCapacity', '72')]
#[Concept('Size', '20')]
#[Concept('Speed', '9')]
#[Concept('Multiplier', 'x3')]
#[ImageCredit('')]
#[FlavorText([])]
#[LocalHeroImage('TODO.png')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="0" >
<x-card.normalrule>TODO</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
