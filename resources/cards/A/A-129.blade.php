@push('background')
{{ view('Draw.background') }}
<x-card.flavortext>
  <x-card.flavortext.line>Also called "airport security."</x-card.flavortext.line>
  </x-card.flavortext>
  @endpush

<x-card :$cardNumber card-name="Inappropriate Traffic Stop">

<x-card.concept.staticon type="Draw" x="530" />
<text>
<x-card.normalrule>Look at the top 5 cards of any Library.</x-card.normalrule>
<x-card.normalrule>Discard any number of Item cards you find there.</x-card.normalrule>
<x-card.normalrule>The owner of the Library shuffles</x-card.normalrule>
<x-card.normalrule>the other cards back into their deck.</x-card.normalrule>
  </text>

</x-card>
