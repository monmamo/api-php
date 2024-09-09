<x-card.Draw :$cardNumber card-name="Binge" :omit-standard-rule="true">
    <x-card.rulebox>
    <x-slot:small>
Put this card on the Battlefield.
This card will remain on the Battlefield until it is discarded by rule.
</x-slot:small>
<x-slot:normal>
        Draw 7 cards. 
        Resolution phase: Roll 1d6.
        If @dieroll(1,2), discard your hand and this card.
</x-slot:normal>
    </x-card.rulebox>
</x-card.Draw>
