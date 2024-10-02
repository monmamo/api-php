<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Bolt of Lightning')]
#[Concepts('Attack')]
#[ImageCredit('Image by Lorc on Game-Icons.net under CC BY 3.0')]
#[FlavorText('FLAVOR_TEXT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <g class="svg-hero"><?= view('Energos.icon') ?></g>
    
        <text y="500" filter="url(#solid)">
            <x-card.smallrule>Requires Energos.</x-card.smallrule>
<x-card.normalrule>Discard all Electricity cards from the attacking </x-card.normalrule>
<x-card.normalrule>Monster. Roll 2d6 for each Electricity card </x-card.normalrule>
<x-card.normalrule>discarded from this Monster. </x-card.normalrule>
<x-card.normalrule>The damage done is the sum of these rolls.</x-card.normalrule>
        </text>
HTML;
}
};
