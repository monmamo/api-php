<x-card.Trait :$cardNumber card-name="Ramming">
    <x-card.image-credit :ai="true" />
    <image x="0" y="0" class="hero" href="@local(AT32.png)" />
<x-slot:card-rules>
    When this Monster uses Pounce or physical Attack,
    If the defending Monster takes any damage,
    roll 1d6. If @dieroll(4,5,6), it cannot attack on the next turn.
    If @dieroll(6), also discard one Trait
    card from the defending Monster.
</x-slot:card-rules>
</x-card.Trait>
