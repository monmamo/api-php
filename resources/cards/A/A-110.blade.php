@push('background')
{{ view('Draw.background') }}
<x-card.flavortext>
  <x-card.flavortext.line>They say that bad breath is better than no breath at all…</x-card.flavortext.line>
  </x-card.flavortext>
  <x-card.image-credit>Image by brgfx on Freepik</x-card.image-credit>
  @endpush

<x-card :$cardNumber card-name="Halitosis">
  <image x="0" y="0" class="hero" href="@local(A110.jpg)" />
<x-card.rulebox>
<x-card.concept-card type="Bane" />
<x-card.phaserule type="Resolution" y="135" height="135">
  <text >
<x-card.normalrule>When a Monster on</x-card.normalrule>
<x-card.normalrule>this Monster’s team attacks or defends,</x-card.normalrule>
<x-card.normalrule>roll X = 1d4.</x-card.normalrule>
<x-card.normalrule>Reduce the damage done or prevented by Xd4.</x-card.normalrule>
</text>
</x-card.phaserule>

</x-card.rulebox>
</x-card>
