@push('background')
{{ view('Vendor.background') }}
@endpush


<x-card :$cardNumber card-name="Hardware Store" >
<x-card.rulebox>
<x-card.concept-card type="Vendor" />
<x-slot:normal>
    Discard any number of cards from your hand. 
    For each card that you discarded, search your 
    Library for a Durable card. 
    Reveal them, then put them in your hand. 
    Shuffle your library.
  </x-slot:normal>
</x-card.rulebox>
</x-card>
