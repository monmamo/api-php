<x-card.image-credit>
@ai
</x-card.image-credit>
@endpush

@push('background')
{{ view('Bystander.background') }}
@endpush



<x-card :$cardNumber card-name="Defensive Coordinator">
    
    <image x="0" y="0" class="hero" href="@local(A-055.png)" />

    <x-card.rulebox>
        <x-card.concept.row>
        <x-card.concept.card type="Bystander" x="0" width="190" />
        <x-card.concept.card type="Male" x="190" width="190" />
        <x-card.concept.card type="Integrity" x="380" width="230" >1d4</x-card.concept>
        </x-card.concept.row>

        
        <x-slot:small>
        Limit 1 per player on Battlefield. 
        You must already have a Head Coach on the Battlefield
        to put this card on the Battlefield.
        You may choose to make this card Female 
        when you put it on the Battlefield.
    </x-slot:small>
    <x-slot:normal>
        You may put the Defense cards you use
        at the bottom of your Library.        
</x-slot:normal>
</x-card.rulebox>

</x-card>
