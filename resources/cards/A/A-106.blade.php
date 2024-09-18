@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Reconnaissance Team">

  <x-card.phaserule type="Draw"  height="130">
    <text >    
<x-card.normalrule>Discard up to 2 Monster cards</x-card.normalrule>
<x-card.normalrule>from your hand. Draw 3 cards for</x-card.normalrule>
<x-card.normalrule>each card you discarded in this way.</x-card.normalrule>
</text>
</x-card.phaserule>


</x-card>
