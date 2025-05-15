<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Pawn Shop')]
    #[Concept('Vendor')]
    #[Concept('Integrity', 4)]
    #[ImageCredit('Icon by archer7 from Noun Project')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<svg x="0" y="-75" height="650" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0">
    <g fill="#ffffff" fill-opacity="1">
        <path d="m81.168 43.957c-0.875-14.082-11.25-26-25.082-28.75-0.66797-2.75-3.125-4.793-6.043-4.793s-5.418 2.043-6.043 4.793c-13.832 2.75-24.25 14.668-25.082 28.75-7.082 1-12.582 7.043-12.582 14.375 0 8.043 6.543 14.582 14.582 14.582 8.043 0 14.582-6.543 14.582-14.582 0-7.25-5.375-13.25-12.332-14.375 0.83203-12 9.582-22.082 21.332-24.543 0.70703 1.457 1.957 2.543 3.5 3.082v38.082c-7.043 1.043-12.5 7.043-12.5 14.375 0 8.043 6.543 14.582 14.582 14.582 8.043 0 14.582-6.543 14.582-14.582 0-7.332-5.457-13.332-12.5-14.375l0.003907-38.035c1.543-0.54297 2.793-1.668 3.5-3.082 11.75 2.5 20.5 12.543 21.332 24.543-6.957 1.082-12.332 7.082-12.332 14.375 0 8.043 6.543 14.582 14.582 14.582 8.043 0 14.582-6.543 14.582-14.582 0-7.375-5.5-13.418-12.582-14.375zm-49.918 14.375c0 5.75-4.668 10.418-10.418 10.418s-10.418-4.668-10.418-10.418 4.668-10.418 10.418-10.418 10.418 4.668 10.418 10.418zm29.168 16.668c0 5.75-4.668 10.418-10.418 10.418s-10.418-4.668-10.418-10.418 4.668-10.418 10.418-10.418 10.418 4.668 10.418 10.418zm-10.418-56.25c-1.168 0-2.082-0.91797-2.082-2.082 0-1.168 0.91797-2.082 2.082-2.082 1.168 0 2.082 0.91797 2.082 2.082 0 1.168-0.91797 2.082-2.082 2.082zm29.168 50c-5.75 0-10.418-4.668-10.418-10.418s4.668-10.418 10.418-10.418 10.418 4.668 10.418 10.418-4.668 10.418-10.418 10.418z" />
        <path d="m18.75 58.332c0-1.168-0.91797-2.082-2.082-2.082-1.168 0-2.082 0.91797-2.082 2.082 0 3.457 2.793 6.25 6.25 6.25 1.168 0 2.082-0.91797 2.082-2.082 0-1.168-0.91797-2.082-2.082-2.082-1.168 0-2.082-0.91797-2.082-2.082z" />
        <path d="m47.918 75c0-1.168-0.91797-2.082-2.082-2.082-1.168 0-2.082 0.91797-2.082 2.082 0 3.457 2.793 6.25 6.25 6.25 1.168 0 2.082-0.91797 2.082-2.082 0-1.168-0.91797-2.082-2.082-2.082-1.168 0-2.082-0.91797-2.082-2.082z" />
        <path d="m79.168 60.418c-1.168 0-2.082-0.91797-2.082-2.082 0-1.168-0.91797-2.082-2.082-2.082-1.168 0-2.082 0.91797-2.082 2.082 0 3.457 2.793 6.25 6.25 6.25 1.168 0 2.082-0.91797 2.082-2.082 0-1.168-0.91797-2.082-2.082-2.082z" />
</svg>
 <x-card.phaserule type="Draw" :lines="6">
     <text >
    <x-card.normalrule>You may do one of the following:</x-card.normalrule>
    <x-card.normalrule>&bull; Discard 3 cards from your hand.</x-card.normalrule>
    <x-card.normalrule>Search your Library for one Durable cards.</x-card.normalrule>
    <x-card.normalrule>Reveal any cards you select, then put them</x-card.normalrule>
    <x-card.normalrule>in your hand. Shuffle your library.</x-card.normalrule>
    <x-card.normalrule>&bull; Discard a Durable card to draw two cards.</x-card.normalrule>
    <x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
    </text>
</x-card.phaserule>
HTML;
        }
    };
