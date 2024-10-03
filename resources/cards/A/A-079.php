<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Rescue Drone')]
#[Concept('Drone')]
#[Concept('Item', 'DamageCapacity:5', 'Size:25', 'Speed:4')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text y="140" filter="url(#solid)">
<x-card.normalrule>Choose one of your Monsters on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Shuffle that Monster, all cards attached to it,</x-card.normalrule>
<x-card.normalrule>and Rescue Drone into your Library.</x-card.normalrule>
</text>
HTML;
    }
};
