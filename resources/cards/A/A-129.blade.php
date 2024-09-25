@push('background')
{{ view('Draw.background') }}
<x-card.flavortext>
  <x-card.flavortext.line>Also called "airport security."</x-card.flavortext.line>
  </x-card.flavortext>
  @endpush

<x-card :$cardNumber :$dx :$dy card-name="Inappropriate Traffic Stop">

<x-card.concept.staticon type="Draw" />
<x-card.phaserule type="Draw" lines="4"><text>    
<x-card.normalrule>Look at the top 5 cards of any Library.</x-card.normalrule>
<x-card.normalrule>Discard any number of Item cards you find</x-card.normalrule>
<x-card.normalrule>there. The owner of the Library shuffles</x-card.normalrule>
<x-card.normalrule>the other cards back into their deck.</x-card.normalrule>
</text></x-card.phaserule>

</x-card>
