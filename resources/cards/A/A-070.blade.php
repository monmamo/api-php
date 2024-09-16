@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Welcome to Flavortext">
<x-card.rulebox>
<x-card.concept-card type="Draw" />
<x-slot:normal>
    Search your Library for a card with flavor text.
    Put it in your hand. Shuffle your Library.
    </x-slot:normal>
</x-card.rulebox>
</x-card>
