@push('background')
{{ view('Vendor.background') }}
@endpush

<x-card :$cardNumber card-name="Insurance Policy" >
<x-card.concept.staticon type="Vendor" x="530" />

</x-card.Vendor>
    
<text>You can't play this card if you have any cards in your hand other than this card. Show your hand to your opponent, then draw 5 cards.</text>

