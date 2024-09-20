@push('background')
{{ view('Bane.background') }}
<x-card.flavortext>
  <x-card.flavortext.line>They say that bad breath is better than no breath at all…</x-card.flavortext.line>
  </x-card.flavortext>
  <x-card.image-credit>@ai</x-card.image-credit>
  @endpush

<x-card :$cardNumber card-name="Halitosis">
  <image x="0" y="0" class="hero" href="@local(A110.jpg)" />

  
<x-card.concept.staticon type="Bane" x="530" />

<text y="500" filter="url(#solid)">
  <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
  </text >

<x-card.phaserule type="Resolution" height="135">
  <text >
<x-card.normalrule>When a Monster on this</x-card.normalrule>
<x-card.normalrule>Monster’s team attacks or defends,</x-card.normalrule>
<x-card.normalrule>reduce the damage done/prevented by 2d6.</x-card.normalrule>
</text>
</x-card.phaserule>

</x-card>
