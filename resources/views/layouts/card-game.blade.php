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
    ?>

<x-slot:leftbar>
    <x-content-bar.section title="Rules" :links="['/card-game/rules/TODO1' => 'Overview', '/card-game/rules/TODO2' => 'Updates', '/card-game/rules/TODO3' => 'Reports']" />
    <x-content-bar.section title="Card Sets" :links="$card_sets" />
    <x-content-bar.section title="Decks" :links="$decks" />
</x-slot:leftbar>


{{$slot}}

</x-guest-layout>
