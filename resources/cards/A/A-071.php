<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Speakeasy')]
#[Concept('Place')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('Prohibition only drives drunkenness behind doors and into dark places. - Mark Twain')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text>
<x-card.normalrule>For any attempt to use an rule </x-card.normalrule>
<x-card.normalrule>from a Mobster card, roll 1d6. </x-card.normalrule>
<x-card.normalrule>If @dieroll(1,2) the effect has no effect.</x-card.normalrule>
    </text>
HTML;
    }
};
