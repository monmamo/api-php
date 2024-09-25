@push('background')
{{ view('Vendor.background') }}
@endpush

<x-card :$cardNumber :$dx :$dy card-name="Insurance Policy" >
<x-card.concept.staticon type="Vendor"  />

    
    <text y="500" filter="url(#solid)">
<x-card.smallrule>You can't play this card if you have any </x-card.smallrule>
<x-card.smallrule>cards in your hand other than this card. </x-card.smallrule>
</text>

<x-card.phaserule type="Draw" lines="2"><text>
<x-card.normalrule>Show your hand to your opponent,</x-card.normalrule>
    <x-card.normalrule>then draw 5 cards.</x-card.normalrule>
</text></x-card.phaserule>
</x-card>

