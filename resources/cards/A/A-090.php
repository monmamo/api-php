<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Five-Finger Discount')]
#[Concepts('Draw', 'Criminal')]
#[ImageCredit('Adobe Stock #756008424')]
#[FlavorText('FLAVOR_TEXT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(hero/AdobeStock_756008424.jpeg)"/>

    <text y="150" filter="url(#solid)">
<x-card.normalrule>Play a Vendor card.</x-card.normalrule>
<x-card.normalrule>You may ignore any requirement</x-card.normalrule>
<x-card.normalrule>to discard cards.</x-card.normalrule>
    </text>
HTML;
    }
};
