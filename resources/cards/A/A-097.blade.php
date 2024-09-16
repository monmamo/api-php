{{-- inspiration: PTCG Dark Primeape's \"Frenzy\" power --}}

@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Focus">
    <x-card.rulebox>
<x-card.concept-card type="Trait" /> 

<x-card.phaserule type="Resolution" y="135" height="135">
    <text >
<x-card.normalrule>If this Monster does any damage </x-card.normalrule>
<x-card.normalrule>while it is Confused (even to itself), </x-card.normalrule>
<x-card.normalrule>it does 1d4 more damage.</x-card.normalrule>
</text>
</x-card.phaserule>

</x-card.rulebox>
</x-card>
