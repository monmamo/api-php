@push('image-credit')
@ai
@endpush

<x-card.Bystander :$cardNumber card-name="Defensive Coordinator">
    <image x="0" y="0" class="hero" href="@local(A-055.png)" />
    <x-card.concept type="Integrity">1d4</x-card.concern>
    <x-card.rulebox>
        <x-slot:small>
        Limit 1 per player on Battlefield. 
        You must already have a Head Coach on the Battlefield
        to put this card on the Battlefield.
    </x-slot:small>
    <x-slot:normal>
        You may put the Defense cards you use
        at the bottom of your Library.        
</x-slot:normal>
</x-card.rulebox>

</x-card.Bystander>
