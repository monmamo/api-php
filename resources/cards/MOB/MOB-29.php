<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

if (!\defined('PLAYER_LIMIT_PREREQUISITE')) {
    \define('PLAYER_LIMIT_PREREQUISITE', \trans_choice('rules.player-limit', 1));
}

return new
#[Title('Nurse')]
#[Concept('Mobster')]
#[Concept('Female')]
#[Concept('Integrity', '4')]
#[ImageCredit('Icon by InYoung Park from Noun Project')]
#[Prerequisites(y: 345, lines: [PLAYER_LIMIT_PREREQUISITE, 'You may choose to make this card Male', 'when you put it on the Battlefield.'])]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        /**
         * @implements \App\Contracts\Card\CardComponents::background
         */
        public function background(): \Traversable
        {
            yield \view('Character.gradient-background');
            yield <<<'SVG'
    <x-svg y="45" :x="(750-1000)/2" width="1000" height="1000" viewBox="0 0 512 512">
  <path d="M250.882 22.802c-23.366 3.035-44.553 30.444-44.553 65.935 0 19.558 6.771 36.856 16.695 48.815l11.84 14.263-18.217 3.424c-12.9 2.425-22.358 9.24-30.443 20.336-8.085 11.097-14.266 26.558-18.598 44.375-7.843 32.28-9.568 71.693-9.842 106.436h42.868l11.771 157.836c29.894 6.748 61.811 6.51 90.602.025l10.414-157.86h40.816c-.027-35.169-.477-75.126-7.584-107.65-3.918-17.934-9.858-33.372-18.04-44.343-8.185-10.97-18.08-17.745-32.563-19.989l-18.592-2.88 11.736-14.704c9.495-11.897 15.932-28.997 15.932-48.082 0-37.838-23.655-65.844-49.399-65.844z" fill="#303000" fill-opacity="1"></path>
</x-svg>
    <x-svg y="50" :x="(750-450)/2" width="450" height="450" viewBox="0 0 100 100">
  <path fill="#606000" fill-opacity="1" d="m37.234 77.383 4.875-4.4961 5.4062 11.379zm20.648-4.4805-5.3867 11.34 10.246-6.8594zm7.5-9.0664c-0.92578-0.35938-1.8281-0.71875-2.6797-1.082l-3.5703 7.5117h6.25zm-24.52 6.4297-3.5703-7.5117c-0.85938 0.36328-1.7695 0.73047-2.707 1.0898v6.4219zm32.824-10.277c-3.7656 0.75781-10.191 1.1523-17.074-2.3359-2.2148 1.3828-4.4961 2.1719-6.6133 2.1719s-4.3984-0.78906-6.6094-2.168c-6.8828 3.4844-13.312 3.0898-17.074 2.3359-1.4727-0.29688-2.082-2.043-1.1484-3.2188 4.8555-6.1172 5.7812-17.328 5.957-21.652-0.32812-1.418-0.52344-2.8906-0.52344-4.4062 0-4.6211 1.6445-8.8438 4.3438-12.172v-5.5469c0-2.1562 1.3633-4.1094 3.3984-4.8516 3.9141-1.4375 9.1133-3.1445 11.656-3.1445s7.7422 1.707 11.66 3.1406c2.0312 0.74609 3.3984 2.6953 3.3984 4.8516v5.5469c2.6992 3.332 4.3438 7.5508 4.3438 12.172 0 1.5195-0.19141 2.9883-0.52344 4.4062 0.17578 4.3242 1.1016 15.531 5.957 21.652 0.92969 1.1797 0.32031 2.9258-1.1484 3.2188zm-37.238-38.73c0 0.51563 0.26562 0.98438 0.70703 1.2539 0.4375 0.26562 0.94141 0.28125 1.3867 0 2.4531-1.2812 6.4336-2.8125 11.457-2.8125s9.0039 1.5312 11.453 2.8125c0.44531 0.23047 0.95312 0.21484 1.3867-0 0.44531-0.26953 0.70703-0.73828 0.70703-1.2539l0-8.2617c0-1.5312-0.96875-2.9102-2.4102-3.4414-5.3711-1.9648-9.3281-3.0469-11.141-3.0469s-5.7695 1.082-11.141 3.0508c-1.4414 0.52734-2.4102 1.9102-2.4102 3.4414zm30.621 16.402c-0.38281-0.79688-0.96094-1.543-1.4492-2.1445-1.2695-1.5742-2.8398-2.9258-4.582-3.9531-0.9375-0.55469-1.9453-1.0156-2.9766-1.3555-1.25-0.41406-2.7852-0.40625-4.0977-0.57422-1.2227-0.15234-2.4141-0.25-3.5742-0.68359-1.7773-0.67188-3.375-1.7734-4.6914-3.1406-0.41406-0.42969-0.80469-0.88672-1.1562-1.3711-0-0-0.38672-0.42969-0.375-0.55469-1.3164 11.418-9.4062 12.766-11.27 12.926 0.35937 8.8047 6.1836 16.809 12.023 20 0.41797 0.23047 0.83203 0.42969 1.2461 0.60938 0 0 0 0 0.10156 0 0.39844 0.16797 0.79297 0.3125 1.1836 0.42969 0 0 0 0 0.14453 0 0.38672 0.10938 0.76562 0.19922 1.1406 0.26172 0 0 0 0 0.125 0 0.38672 0 0.76953 0 1.1406 0s0.75391-0 1.1406-0c0-0 0-0 0.125-0 0.375-0 0.75781-0.14844 1.1406-0.26172 0-0 0-0 0.14453-0 0.39062-0.11719 0.78516-0.26172 1.1836-0.42969 0-0 0-0 0.10156-0 0.41406-0.17969 0.83203-0.37891 1.2461-0.60938 5.6445-3.1094 11.297-10.699 11.984-19.168zm-12.738-26.078h-2.1797c-0.29297 0-0.53516-0.23828-0.53516-0.53516v-2.1797c0-0.29297-0.23828-0.53516-0.53516-0.53516h-2.168c-0.29297 0-0.53516 0.23828-0.53516 0.53516v2.1797c0 0.29297-0.23828 0.53516-0.53516 0.53516h-2.1797c-0.29297 0-0.53516 0.23828-0.53516 0.53516v2.168c0 0.29297 0.23828 0.53516 0.53516 0.53516h2.1797c0.29297 0 0.53516 0.23828 0.53516 0.53516v2.1797c0 0.29297 0.23828 0.53516 0.53516 0.53516h2.168c0.29297 0 0.53516-0.23828 0.53516-0.53516v-2.1797c0-0.29297 0.23828-0.53516 0.53516-0.53516h2.1797c0.29297 0 0.53516-0.23828 0.53516-0.53516v-2.168c0-0.29688-0.23828-0.53516-0.53516-0.53516zm28.887 80.977c-5.7461 1.0977-17.094 2.4414-33.219 2.4414s-27.473-1.3438-33.219-2.4414c-3.0898-0.58984-5.0547-3.1758-4.4648-5.8281l3.1367-14.047c0.51172-2.2969 2.5312-4.1523 5.1953-4.7031 4.5781-0.94922 8.75-2.2188 12.434-3.5703v6.6055c0 0.41406 0.33594 0.75391 0.75391 0.75391h7.2617l-5.5859 5.1523c-0.16797 0.15625-0.25781 0.38281-0.23828 0.61328 0 0.23047 0.14062 0.4375 0.33203 0.56641l13.969 9.3477c0 0 0 0 0.14453 0 0 0 0.14453 0 0.22266 0 0 0 0 0 0 0 0 0 0-0 0-0 0 0 0 0 0 0 0 0 0-0 0-0 0-0 0.14844-0 0.22266-0 0-0 0-0 0.14453-0l13.969-9.3477c0.19141-0.12891 0.3125-0.33594 0.33203-0.56641 0-0.23047-0-0.45703-0.23828-0.61328l-5.5859-5.1523h7.2578c0.41406 0 0.75391-0.33594 0.75391-0.75391v-6.6172c3.6914 1.3555 7.875 2.6289 12.461 3.582 2.6641 0.55078 4.6836 2.4062 5.1953 4.7031l3.1367 14.047c0.58984 2.6562-1.3789 5.2383-4.4648 5.8281zm-4.75-9.6289c0-0.37891-0.30859-0.68359-0.68359-0.68359h-2.8008c-0.37891 0-0.68359-0.30859-0.68359-0.68359v-2.8008c0-0.37891-0.30859-0.68359-0.68359-0.68359h-2.7852c-0.37891 0-0.68359 0.30859-0.68359 0.68359v2.8008c0 0.37891-0.30859 0.68359-0.68359 0.68359h-2.8008c-0.37891 0-0.68359 0.30859-0.68359 0.68359v2.7852c0 0.37891 0.30859 0.68359 0.68359 0.68359h2.8008c0.37891 0 0.68359 0.30859 0.68359 0.68359v2.8008c0 0.37891 0.30859 0.68359 0.68359 0.68359h2.7852c0.37891 0 0.68359-0.30859 0.68359-0.68359v-2.8008c0-0.37891 0.30859-0.68359 0.68359-0.68359h2.8008c0.37891 0 0.68359-0.30469 0.68359-0.68359z"/>
  </x-svg>
SVG;
        }

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Resolution" height="130">
<text >
<x-card.normalrule>For each of your Monsters that did not attack,</x-card.normalrule>
<x-card.normalrule>you may restore 2 @damage or</x-card.normalrule>
<x-card.normalrule>remove one Bane card from it.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
