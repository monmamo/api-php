<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('From Bad to Worse')]
#[Concept('Environment')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <text y="80" filter="url(#solid)">
<x-card.normalrule>Discard this card once there are no longer</x-card.normalrule>
<x-card.normalrule>any Bane cards attached to any Monsters</x-card.normalrule>
<x-card.normalrule>on the Battlefield.</x-card.normalrule>
<x-card.normalrule>The redemptive properties of the Bane cards </x-card.normalrule>
<x-card.normalrule>attached to Monsters have no effect.</x-card.normalrule>
</text>
HTML;
    }
};
