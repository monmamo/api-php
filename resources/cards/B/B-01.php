<?php
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Fabric Allergy')]
    #[Concept('Bane')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'

<text y="500" filter="url(#solid)">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        </text >

        <x-card.phaserule type="Resolution" y="135" height="100">
            <text >
                <x-card.normalrule>If this Monster is wearing a Garment, it takes 1d4 damage.</x-card.normalrule>
            </text>
        </x-card.phaserule>
HTML;}};
