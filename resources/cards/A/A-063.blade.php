<x-card.image-credit>
Image by photoroyalty on Freepik {{-- https://www.freepik.com/free-vector/time-is-money-background_1014317.htm --}}
</x-card.image-credit>
@endpush

<x-card.flavortext>
<x-card.flavortext.line>The reward for investing with patience.</x-card.flavortext.line>
</x-card.flavortext>

@push('background')
{{ view('Vendor.background') }}
@endpush


<x-card :$cardNumber card-name="Dividends">
<x-card.concept-card type="Vendor" />
  <image x="0" y="0" class="hero" href="@local(A135.jpg)" />
<x-card.rulebox>
<x-slot:normal>
  Turn your Discard pile face-down,
  shuffle it, and draw 1d6 cards from it
  without looking at them.
  Shuffle those cards into your Library.
  </x-slot:normal>
</x-card.rulebox>
</x-card.Vendor>