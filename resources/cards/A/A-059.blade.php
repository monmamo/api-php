@push('image-credit')
@ai
@endpush

<x-card.Trait :$cardNumber card-name="Dandruff">
    <image x="0" y="0" class="hero" href="@local(hero/dandruff.jpeg)" />
<x-slot:card-rules>
    When this Monster takes a physical attack, 
    the attacking Monster takes 1d6 damage.
</x-slot:card-rules>
</x-card.Trait>
