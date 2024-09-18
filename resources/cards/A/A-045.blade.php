<x-card.image-credit>
@ai
</x-card.image-credit>
@endpush

@push('background')
{{ view('Mobster.background') }}
@endpush

<x-card :$cardNumber card-name="Crooked Cop">

    <image x="0" y="0" class="hero" href="@local(A-045.jpg)" />


  <x-card.concept.row>
    <x-card.concept.card type="Mobster" x="0" width="380" />
    <x-card.concept.card type="Integrity" x="380" width="230" >1d4</x-card.concept>
    </x-card.concept.row>

    <x-card.phaserule type="Draw" y="170" height="130">
      <text >
<x-card.normalrule>Choose an opponent.</x-card.normalrule>
<x-card.normalrule>Choose a random card from that opponent's</x-card.normalrule>
<x-card.normalrule>hand. They must discard that card.</x-card.normalrule>
<x-card.normalrule>Reveal cards from the top of your Library until </x-card.normalrule>
<x-card.normalrule>an Item card appears. Put that card in your hand.</x-card.normalrule>
<x-card.normalrule>Shuffle the other cards back into your Library.</x-card.normalrule>
</text>
</x-card.phaserule>

            
</x-card>
