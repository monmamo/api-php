<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Sympathetic Fan')]
#[Concept('Bystander')]
#[Concept('Integrity', '3')]
#[ImageCredit('')]
#[FlavorText([])]
#[LocalHeroImage('TODO.png')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="2"><text>
    <x-card.normalrule>When one of your Monsters is Knocked Out,</x-card.normalrule>
<x-card.normalrule>you may draw up to 3 cards.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
