@push('image-credit')
Image by photoroyalty on Freepik {{-- https://www.freepik.com/free-vector/time-is-money-background_1014317.htm --}}
@endpush

@push('flavor-text')
<x-card.flavor-text-line>The reward for investing with patience.</x-card.flavor-text-line>
@endpush

<x-card.Vendor :$cardNumber card-name="Dividends">
  <image x="0" y="0" class="hero" href="@local(A135.jpg)" />
<x-slot:card-rules>
  Turn your Discard pile face-down,
  shuffle it, and draw 1d6 cards from it
  without looking at them.
  Shuffle those cards into your Library.
  </x-slot:card-rules>
</x-card.Vendor>