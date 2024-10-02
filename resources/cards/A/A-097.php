<?php
// inspiration: PTCG Dark Primeape's \"Frenzy\" power

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Frenzy')]
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
<x-card.normalrule>If this Monster does any damage </x-card.normalrule>
<x-card.normalrule>while it is Confused (even to itself), </x-card.normalrule>
<x-card.normalrule>it does 1d4 more damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
}
};
