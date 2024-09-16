<x-card.image-credit>
@ai
</x-card.image-credit>
@endpush


@push('background')
{{ view('Place.background') }}
@endpush


<x-card :$cardNumber card-name="Speakeasy">
<x-card.rulebox>
<x-card.concept-card type="Place" />
<x-slot:normal>
        For any attempt to use an rule from a 
        Mobster card, roll 1d6. 
        If @dieroll(1,2) the effect has no effect.
    </x-slot:normal>
</x-card.rulebox>
</x-card>
