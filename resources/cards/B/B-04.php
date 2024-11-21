<?php
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Sunken Eye')]
    #[Concept('Bane')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text y="500">
<x-card.normalrule>You may play this Bane only with an Attack.</x-card.normalrule>
    <x-card.normalrule>Limit 2 per Monster.</x-card.normalrule>
</text>

<x-card.phaserule type="Resolution" height="135">
<text >
TODO
</text>
</x-card.phaserule>
HTML;
}
};
