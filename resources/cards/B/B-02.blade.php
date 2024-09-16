@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Uncontrollable Empathy">
<x-card.rulebox>
<x-card.concept-card type="Draw" />
<x-slot:normal>
        Reduce Attack damage by Size/2.
    </x-slot:normal>
</x-card.rulebox>
    </x-card>