<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush

@push('background')
{{ view('Catastrophe.background') }}
@endpush


<x-card :$cardNumber card-name="Tsunami">
<x-card.concept.staticon type="Catastrophe" x="530" />
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    
    <x-slot:small>
        
    </x-slot:small>
        <text>
Each player discards 3 cards from the top of his Library.
If the Place card on the Battlefield is a Venue or Facility card, discard it.
Discard all Mobster and Bystander cards on the Battlefield.
Discard all Item cards on the Battlefield.
    </text>
    

</x-card>