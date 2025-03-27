<x-guest-layout>
    <?php
    // Won't include every concept, just the ones that are most important.
    $concepts = [
'/concepts/Draw' => 'Draw',
'/concepts/Upkeep' => 'Upkeep',
'/concepts/Command' => 'Command',
'/concepts/Resolution' => 'Resolution',
];

//
    ?>
    <x-slot:page-title>Battle Card Game</x-slot>

<x-slot:leftbar>
<x-content-bar.section title="General Rules" :links="['card-game/layout' => 'Layout', 'card-game/card' => 'Card Elements', 'card-game/play' => 'Gameplay & Objectives','card-game/setup' => 'Setup Phase','card-game/draw' => 'Draw Phase','card-game/upkeep' => 'Upkeep Phase','card-game/command' => 'Command Phase','card-game/resolution' => 'Resolution Phase','card-game/dice'=>'Resolving Dice Effects']" />
<x-content-bar.section title="Monster Effects" :links="['card-game/confusion'=>'Confusion','card-game/hypnosis'=>'Hypnosis','card-game/paralysis'=>'Paralysis']" />
<x-content-bar.section title="Special Rules" :links="['card-game/bribery'=>'Integrity & Bribery','card-game/power-up'=>'Power Up','card-game/secret-play'=>'Secret Play','card-game/sucker-punch'=>'Sucker Punch']" />
<x-content-bar.section title="Ways to Play" :links="['card-game/sdv'=>'Single-Deck Version','card-game/pdv'=>'Personal Deck Version','card-game/bf'=>'Battle Formats']" />
<x-content-bar.section title="Concepts" :links="$concepts" />
<x-content-bar.section title="Card Sets" :links="config('ui.card_sets')" />
<x-content-bar.section title="Decks" :links="config('ui.decks')" />
</x-slot:leftbar>

</x-guest-layout>
