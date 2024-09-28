@push('background')
{{ view('Vendor.background') }}
<x-card.image-credit :ai="true" />
@endpush

<x-card :$cardNumber card-name="Farmer's Market" >

  <image x="0" y="0" class="hero" href="@local(A082.png)" />
  
    'concepts' => ['Vendor'],
    <x-card.concept.row>
  <x-card.concept.card type="Integrity">1d4</x-card.concept.card>
    </x-card.concept.row>
    <text y="140" filter="url(#solid)">
<x-card.normalrule>Discard any number of cards from your hand.</x-card.normalrule>
<x-card.normalrule>For each card discarded, search your Library</x-card.normalrule>
<x-card.normalrule>for a Monster or Mana card. Reveal those</x-card.normalrule>
<x-card.normalrule>cards, then put them in your hand.</x-card.normalrule>
    </text>

</x-card>