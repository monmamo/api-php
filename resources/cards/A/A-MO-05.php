<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Neighborhood &#x201C;Protection&#x201D;')]
    #[Concept('Mobster')]
    #[Concept('Integrity', '4')]
    #[Concept('DamageCapacity', 15)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 2)]
    #[ImageCredit('Image by fxquadro on Freepik')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>A186.jpg</x-card.hero.local>

    <x-card.flavortext>
    <x-card.flavortext.line>Nice monster team you got there.</x-card.flavortext.line>
    <x-card.flavortext.line>Would be a shame if something happened to it.</x-card.flavortext.line>
    </x-card.flavortext>

    <x-card.cardrule y="500" height="55" >
<x-card.normalrule>{{\trans_choice('rules.player-limit', 1)}}</x-card.normalrule>
</x-card.cardrule>

    <x-card.phaserule type="Draw" >
        <text>
            <x-card.normalrule>During your opponents' Draw phase,</x-card.normalrule>
            <x-card.normalrule>they must let you draw a card of your own,</x-card.normalrule>
            <x-card.normalrule>or discard 2 of their own cards.</x-card.normalrule>
        </text>
    </x-card.phaserule>
HTML;
        }
    };
