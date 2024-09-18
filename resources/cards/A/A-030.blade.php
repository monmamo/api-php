@push('background')
{{ view('Trait.background') }}
<x-card.image-credit>
@ai
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Ramming">
    <image x="0" y="0" class="hero" href="@local(AT32.png)" />
        <x-card.concept.staticon type="Trait" x="530" /> 
        <text>
    When this Monster uses Pounce or physical 
    Attack, if the defending Monster takes any
    damage, roll 1d6. If @dieroll(4,5,6), it cannot attack on the 
    next turn. If @dieroll(6), also discard one Trait
    card from the defending Monster.
</text>

</x-card>
