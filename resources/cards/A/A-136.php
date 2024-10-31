<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration: https://bulbapedia.bulbagarden.net/wiki/Junk_Arm_(Triumphant_87)

return new
#[Title('Junk from the Trunk')]
#[Concept('Draw')]
#[ImageCredit('IMAGE_CREDIT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Draw" lines="2">
<text>
<x-card.normalrule>Put an Item card from your </x-card.normalrule>
<x-card.normalrule>Discard into your Library.</x-card.normalrule></text></x-card.phaserule>

HTML;
    }
};
