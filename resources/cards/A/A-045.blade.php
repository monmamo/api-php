@push('image-credit')
@ai
@endpush

<x-card.Mobster :$cardNumber card-name="Crooked Cop" >
    <image x="0" y="0" class="hero" href="@local(A-045.jpg)" />
    <x-card.concept type="Integrity">1d4</x-card.concern>

<x-slot:card-rules>
  Draw phase: Choose an opponent.
  Choose a random card from that opponent's
  hand. They must discard that card.
  Reveal cards from the top of your Library until an
  Item card appears. Put that card in your hand.
  Shuffle the other cards back into your Library.
</x-slot:card-rules>
</x-card.Mobster>
