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
    ?>

<x-slot:leftbar>
    <x-content-bar.section title="General Rules" :links="['/cg/layout' => 'Layout', '/cg/card' => 'Card Elements', '/cg/play' => 'Gameplay & Objectives','/cg/setup' => 'Setup Phase','/cg/draw' => 'Draw Phase','/cg/upkeep' => 'Upkeep Phase','/cg/command' => 'Command Phase','/cg/resolution' => 'Resolution Phase','/cg/dice'=>'Resolving Dice Effects']" />
        <x-content-bar.section title="Monster Effects" :links="['/cg/confusion'=>'Confusion','/cg/hypnosis'=>'Hypnosis','/cg/paralysis'=>'Paralysis']" />
        <x-content-bar.section title="Special Rules" :links="['/cg/bribery'=>'Integrity & Bribery','/cg/power-up'=>'Power Up','/cg/secret-play'=>'Secret Play','/cg/sucker-punch'=>'Sucker Punch']" />
            <x-content-bar.section title="Ways to Play" :links="['/cg/sdv'=>'Single-Deck Version','/cg/pdv'=>'Personal Deck Version','/cg/bf'=>'Battle Formats']" />
                <x-content-bar.section title="Concepts" :links="$card_sets" />
                <x-content-bar.section title="Card Sets" :links="$card_sets" />
    <x-content-bar.section title="Decks" :links="$decks" />
</x-slot:leftbar>



{{$slot}}

</x-guest-layout>
