<x-guest-layout>
    <x-slot:page-title>Cards</x-slot>

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
    ?>

<x-slot:leftbar>
    <x-content-bar.section title="Card Sets" :links="$card_sets" />
    <x-content-bar.section title="Decks" :links="$decks" />
</x-slot:leftbar>

<x-slot:slot>
    <p>Monsters Masters & Mobsters Cards is a series of collectible and tradable cards that can be used to play the <a href="/cg">Monsters Masters & Mobsters Card Game</a>. The cards are divided into sets and decks. Sets are groups of cards that can be used to build decks. Decks are groups of cards that can be used to play the game.</p>
</x-slot:slot>

</x-guest-layout>
