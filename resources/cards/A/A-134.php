<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-vector/recycle-colorful-geometric-gradient-logo-vector_27230675.htm

return new
#[Title('Mana Recycle System')]
#[Concept('Vendor')]
#[Concept('Integrity',4)]
#[ImageCredit('Image by logturnal on Freepik')]
#[LocalHeroImage('A212.jpg')]
#[FlavorText('FLAVOR_TEXT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.phaserule type="Draw" lines="5"><text>
<x-card.normalrule>You may do one of the following:</x-card.normalrule>
<x-card.normalrule>&bullet; Put a basic Mana card </x-card.normalrule>
<x-card.normalrule>from your Discard into your Hand.</x-card.normalrule>
<x-card.normalrule>&bullet; Shuffle 3 basic Mana cards </x-card.normalrule>
<x-card.normalrule>from your Discard pile into your Library.</x-card.normalrule>
</text></x-card.phaserule>

HTML;
    }
};


