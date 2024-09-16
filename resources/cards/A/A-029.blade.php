@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Oozing Effluvia">
<x-card.rulebox>
    <x-card.concept-card type="Trait" /> 
    <x-slot:normal>Dodge prevents Size damage instead of Speed.</x-slot:normal>
</x-card.rulebox>
</x-card>
