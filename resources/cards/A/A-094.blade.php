@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Binge" >
    <x-card.rulebox>
        <text y="0" filter="url(#solid)">           
<x-card.smallrule>Put this card on the Battlefield.</x-card.smallrule>
<x-card.smallrule>This card will remain on the Battlefield until it is discarded by rule.</x-card.smallrule>
</text>

<x-card.phaserule type="Draw" y="70" height="58">
    <text >
<x-card.normalrule>Draw 7 cards. </x-card.normalrule>
</text>
</x-card.phaserule>

<x-card.phaserule type="Resolution" y="135" height="100">
    <text >
<x-card.normalrule>Roll 1d6.</x-card.normalrule>
<x-card.normalrule>If @dieroll(1,2), discard your hand and this card.</x-card.normalrule>
</text>
</x-card.phaserule>

</x-card.rulebox>
</x-card>