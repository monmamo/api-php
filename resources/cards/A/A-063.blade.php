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
<x-card.concept.staticon type="Vendor" x="530" />
  <image x="0" y="0" class="hero" href="@local(A135.jpg)" />

<text>
<x-card.normalrule>Turn your Discard pile face-down,</x-card.normalrule>
<x-card.normalrule>shuffle it, and draw 1d6 cards from it</x-card.normalrule>
<x-card.normalrule>without looking at them.</x-card.normalrule>
<x-card.normalrule>Shuffle those cards into your Library.</x-card.normalrule>
  </text>

</x-card.Vendor>