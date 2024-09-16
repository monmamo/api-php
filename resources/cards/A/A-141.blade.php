@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Laundry">
<x-card.concept-card type="Draw" /> 

</x-card>
    <x-card.rulebox>
<x-slot:normal>Shuffle all discarded Wearable cards into your Library.</x-slot:normal>
</x-card.rulebox>
