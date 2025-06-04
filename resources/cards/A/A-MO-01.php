<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Don')]
#[Concept('Mobster')]
#[Concept('Boss')]
#[Concept('Male')]
#[Concept('DamageCapacity', 15)]
#[Concept('Size', 6)]
#[Concept('Speed', 2)]
#[ImageCredit('Image by Karen Culp (Shutterstock #1426742492)')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        // Icon from Game-Icons.net
        // yield <<<'HTML'
        // <g transform="scale(2.75) translate(-148,0)" fill="#666600">
        // <path d="M257.408 22.127l-23.082 62.035-31.017-57.707-11.542 59.15-44.002-55.543L154.26 110c27.263 27.263 178.638 27.663 206.3 0l5.772-79.936-44.002 55.543-11.54-59.15-31.02 56.986-22.36-61.313h-.002z"  />
        // </g>
        // HTML;

        yield <<<'HTML'
<x-card.hero.local>hero/A-MO-02.jpg</x-card.hero.local>
HTML;

        yield <<<'HTML'
    <x-card.flavortext>
    <x-card.flavortext.line>Highest ranking member of a Crime Family.</x-card.flavortext.line>
    <x-card.flavortext.line>His way or the highway.</x-card.flavortext.line>
    </x-card.flavortext>

    <x-card.cardrule y="500" height="55" >
    <x-card.normalrule>{{\trans_choice('rules.player-limit', 1)}}</x-card.normalrule>
    </x-card.cardrule>
    
        <x-card.phaserule type="Draw"  badge="Repeat">
            <text >
            <x-card.normalrule>You may draw 1 card for each other</x-card.normalrule>
            <x-card.normalrule>Mobster you have on the Battlefield.</x-card.normalrule>
            <x-card.normalrule>{{ __('rules.REDRAW') }}</x-card.normalrule>
        </text>
    </x-card.phaserule>
HTML;
    }
};
