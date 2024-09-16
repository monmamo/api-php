<x-card.image-credit>
@ai
</x-card.image-credit>
@endpush

@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Ramming">
    <image x="0" y="0" class="hero" href="@local(AT32.png)" />

    <x-card.rulebox>
        <x-card.concept-card type="Trait" /> 
        <x-slot:normal>
    When this Monster uses Pounce or physical 
    Attack, if the defending Monster takes any
    damage, roll 1d6. If @dieroll(4,5,6), it cannot attack on the 
    next turn. If @dieroll(6), also discard one Trait
    card from the defending Monster.
</x-slot:normal>
</x-card.rulebox>
</x-card>
