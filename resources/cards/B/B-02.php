<?php
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Uncontrollable Empathy')]
    #[Concept('Bane')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text y="495" filter="url(#solid)">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        </text >

            <x-card.phaserule type="Resolution" height="135">
                <text >
    <x-card.normalrule>Reduce Attack damage by Size/2.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
}
};
