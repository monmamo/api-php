@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Stickiness">
<x-card.rulebox>
<x-card.concept-card type="Trait" />
<x-slot:normal>
    Attempt to remove an Item from this Monster
    succeeds only if 1d6 equals @dieroll(5,6).
</x-slot:normal>
</x-card.rulebox>
</x-card>
