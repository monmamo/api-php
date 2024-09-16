@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Quick Feet">
<x-card.rulebox>
<x-card.concept-card type="Trait" />
<x-slot:normal>Speed +4</x-slot:normal>
</x-card.rulebox>
</x-card>
    