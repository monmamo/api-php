@push('flavor-text')
@endpush

@push('image-credit')
Image by USER_NAME on SERVICE
@endpush

<x-card.Catastrophe :$cardNumber card-name="Tsunami">
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    <x-card.rulebox>
    <x-slot:small>
        
    </x-slot:small>
        <x-slot:normal>
Each player discards 3 cards from the top of his Library.
If the Place card in play is a Venue or Facility card, discard it.
Discard all Mobster and Bystander cards in play.
Discard all Item cards in play.
    </x-slot:normal>
    </x-card.rulebox>

</x-card.Catastrophe>