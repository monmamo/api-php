@push('background')
{{ view('Vendor.background') }}
@endpush

<x-card :$cardNumber card-name="Insurance Policy" >
<x-card.concept-card type="Vendor" />

</x-card.Vendor>
    <x-card.rulebox>
<x-slot:normal>You can't play this card if you have any cards in your hand other than this card. Show your hand to your opponent, then draw 5 cards.</x-slot:normal>
</x-card.rulebox>
