@push('image-credit')
@ai
@endpush

<x-card.Vendor :$cardNumber card-name="Farmer's Market" >
  <image x="0" y="0" class="hero" href="@local(A082.png)" />
  <x-card.concept type="Integrity">1d4</x-card.concern>
<x-slot:card-rules>
  Discard any number of cards
  from your hand. For each card
  discarded, search your Library
  for a Monster or Mana card.
  Reveal those cards, then put them
  in your hand.
  </x-slot:card-rules>
</x-card.Vendor>