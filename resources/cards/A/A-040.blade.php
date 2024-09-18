@push('background')
{{ view('Vendor.background') }}
@endpush


<x-card :$cardNumber card-name="Hardware Store" >

<x-card.concept.staticon type="Vendor" x="530" />
<text>
<x-card.normalrule>Discard any number of cards from your hand. </x-card.normalrule>
<x-card.normalrule>For each card that you discarded, search your </x-card.normalrule>
<x-card.normalrule>Library for a Durable card. </x-card.normalrule>
<x-card.normalrule>Reveal them, then put them in your hand. </x-card.normalrule>
<x-card.normalrule>Shuffle your library.</x-card.normalrule>
  </text>

</x-card>
