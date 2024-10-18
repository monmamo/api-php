<x-guest-layout>
    <?php
    $card_sets = [];
    foreach (\App\Enums\CardSet::cases() as $set) {
        $card_sets['/cards/set/' . $set->value] = sprintf('%s (%s)', $set->name, $set->value);
    }

    $decks = [
        '/cards/deck/sdv' => 'SDV',
        '/cards/deck/pdv-energos' => 'PDV Energos',
        '/cards/deck/pdv-pyros' => 'PDV Pyros',
        '/cards/deck/pdv-aquos' => 'PDV Aquos',
    ];
    // foreach (\App\Enums\CardSet::cases() as $set ){
    //     $card_sets['/cards/set/'.$set->value] = sprintf('%s (%s)', $set->name, $set->value);
    // }

    // Won't include every concept, just the ones that are most important.
    $concepts = [
'/concepts/Draw' => 'Draw',
'/concepts/Upkeep' => 'Upkeep',
'/concepts/Command' => 'Command',
'/concepts/Resolution' => 'Resolution',
];

//
    ?>
    <x-slot:page-title>Card Game</x-slot>

<x-slot:leftbar>
<x-content-bar.section title="General Rules" :links="['card-game/layout' => 'Layout', 'card-game/card' => 'Card Elements', 'card-game/play' => 'Gameplay & Objectives','card-game/setup' => 'Setup Phase','card-game/draw' => 'Draw Phase','card-game/upkeep' => 'Upkeep Phase','card-game/command' => 'Command Phase','card-game/resolution' => 'Resolution Phase','card-game/dice'=>'Resolving Dice Effects']" />
<x-content-bar.section title="Monster Effects" :links="['card-game/confusion'=>'Confusion','card-game/hypnosis'=>'Hypnosis','card-game/paralysis'=>'Paralysis']" />
<x-content-bar.section title="Special Rules" :links="['card-game/bribery'=>'Integrity & Bribery','card-game/power-up'=>'Power Up','card-game/secret-play'=>'Secret Play','card-game/sucker-punch'=>'Sucker Punch']" />
<x-content-bar.section title="Ways to Play" :links="['card-game/sdv'=>'Single-Deck Version','card-game/pdv'=>'Personal Deck Version','card-game/bf'=>'Battle Formats']" />
<x-content-bar.section title="Concepts" :links="$concepts" />
<x-content-bar.section title="Card Sets" :links="$card_sets" />
<x-content-bar.section title="Decks" :links="$decks" />
</x-slot:leftbar>

<div id="content">
    <h1>Monsters Masters & Mobsters Card Game</h1>

    <p>The Monsters Masters & Mobsters Card Game&mdash;just “the Card Game” for short&mdash;is an expandable/extensible card game based on the concept of anthropes (high-sapience beings) battling each other with monsters (low-sapience beings). You probably have played or at least heard of other games with similar concepts. The Card Game takes inspiration from several games before it, but is built from scratch to be easy to learn, easy to play yet infinitely expandable. </p>

    <p>The general objective of the game is to defeat your opponent(s) by guiding your monsters in attacks against your opponents’ monsters.</p>
</div>

</x-guest-layout>
