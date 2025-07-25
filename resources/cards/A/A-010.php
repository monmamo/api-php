<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Private Event')]
#[Concept('Environment')]
    #[ImageCredit('Icon by Delapouite on Game-Icons.net')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
            <x-card.hero.svg><g fill="#ffffff" fill-opacity="1"><path d="M105 41v398h302v-62H247V231h32v-55c0-38 36.5-57 73-57 20.5 0 41 6 55 18V41H105zm247 96c-27.5 0-55 13-55 39v55h110v-55c0-26-27.5-39-55-39zm-192 78c18.1 0 33 14.9 33 33s-14.9 33-33 33-33-14.9-33-33 14.9-33 33-33zm0 18c-8.4 0-15 6.6-15 15s6.6 15 15 15 15-6.6 15-15-6.6-15-15-15zm105 16v110h174V249H265zm87 23a16 16 0 0 1 16 16 16 16 0 0 1-10.9 15.2L368 336h-32l10.9-32.8A16 16 0 0 1 336 288a16 16 0 0 1 16-16zM73 457v30h366v-30H73z" fill="#ffffff" /></g></x-card.hero.svg>

<x-card.cardrule :>
    <x-card.ruleline>No Bystanders are allowed on the Battlefield.</x-card.ruleline>
    <x-card.ruleline>Discard all Bystanders from the Battlefield.</x-card.ruleline>
</x-card.cardrule>
HTML;
        }
    };
