@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Biolure">
<x-card.rulebox>
<x-card.concept-card type="Trait" />
<x-slot:normal>
    When not your turn, roll 1d6 for each Monster 
    on the Battlefield until you get @dieroll(5) or @dieroll(6). 
    The selected Monster cannot attack 
    any other Monster on this turn.
</x-slot:normal>
</x-card.rulebox>
</x-card>
