@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Benevolence">
<x-card.rulebox>
<x-card.concept-card type="Trait" />
<x-slot:normal>
    Damage done to defender: -1d6
    Damage prevented: +1d6
    </x-slot:normal>
</x-card.rulebox>
</x-card>
