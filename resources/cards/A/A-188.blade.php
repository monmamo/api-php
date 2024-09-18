<x-card.image-credit>
@ai
</x-card.image-credit>
@endpush

@push('background')
{{ view('Bystander.background') }}
@endpush

<x-card :$cardNumber card-name="Nurse">

  <image x="0" y="0" class="hero" href="@local(A188.png)" />

  
    <x-card.concept.row>
    <x-card.concept.card type="Bystander" x="0" width="130" />
    <x-card.concept.card type="Female" x="130" width="250" />
    <x-card.concept.card type="Integrity" x="380" width="230" >1d6</x-card.concept>
    </x-card.concept.row>
    
<x-card.smallrule>Limit 1 per player on the Battlefield.</x-card.smallrule>


<x-card.phaserule type="Upkeep" y="170" height="130">
  <text >
<x-card.normalrule>Choose a Monster on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Discard all cards other than Traits attached to that Monster.</x-card.normalrule>
</text>
</x-card.phaserule>

<x-card.phaserule type="Command" y="170" height="130">
  <text >
<x-card.normalrule>The Monster cannot attack, be attacked, or use any Skills.</x-card.normalrule>
</text>
</x-card.phaserule>

<x-card.phaserule type="Resolution" y="170" height="130">
  <text >
<x-card.normalrule>Remove all damage from the Monster.</x-card.normalrule>
</text>
</x-card.phaserule>

            
</x-card>
