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
    <x-content-bar.section title="Card Sets" :links="$card_sets" />
    <x-content-bar.section title="Decks" :links="$decks" />
</x-slot:leftbar>

<x-slot:slot>
</x-slot:slot>

</x-guest-layout>
