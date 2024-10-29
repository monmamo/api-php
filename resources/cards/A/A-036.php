<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Boss')]

    #[Concept('Mobster')]

    #[ImageCredit('Elements of image from Game-Icons.net')]

    #[FlavorText('His way or the highway.')]

    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <g transform="scale(2.75) translate(-148,-60)">
    <path d="M257.408 22.127l-23.082 62.035-31.017-57.707-11.542 59.15-44.002-55.543L154.26 110c27.263 27.263 178.638 27.663 206.3 0l5.772-79.936-44.002 55.543-11.54-59.15-31.02 56.986-22.36-61.313h-.002z" ></path>
    </g>
<x-card.phaserule type="Draw" lines="3" badge="Repeat">
        <text >
        <x-card.normalrule>You may draw 1 card for each other</x-card.normalrule>
        <x-card.normalrule>Mobster you have on the Battlefield.</x-card.normalrule>
        <x-card.normalrule>{{ __('rules.REDRAW') }}</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML;
        }
    };
