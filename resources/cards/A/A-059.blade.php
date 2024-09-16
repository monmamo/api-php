<x-card.image-credit>
@ai
</x-card.image-credit>
@endpush

@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Dandruff">
    <image x="0" y="0" class="hero" href="@local(hero/dandruff.jpeg)" />
    
<x-card.rulebox>
    <x-card.concept-card type="Trait" /> 
    <x-slot:normal>
    When this Monster takes a physical attack, 
    the attacking Monster takes 1d6 damage.
</x-slot:normal>
</x-card.rulebox>
</x-card>
