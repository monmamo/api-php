<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Fortitude')]
#[Concepts('Trait')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
       yield <<<'HTML'
<x-card.phaserule type="Resolution" y="135" height="135">
    <text >
<x-card.normalrule>When attacked, prevent 2d6 damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
}
};
