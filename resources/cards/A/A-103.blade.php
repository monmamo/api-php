@push('background') 
{{ view('Upkeep.background') }}
<x-card.image-credit>
@ai
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Drinking Water Fountain">

  <image x="0" y="0" class="hero" href="@local(A307.png)" />

    <x-card.phaserule type="Upkeep" height="240">
      <text >
<x-card.normalrule>You may heal 4 damage from </x-card.normalrule>
<x-card.normalrule>and/or attach a Water Mana card from your  </x-card.normalrule>
<x-card.normalrule>Library or Discard to each of your Monsters</x-card.normalrule>
<x-card.normalrule>on the Battlefield. After using this card, </x-card.normalrule>
<x-card.normalrule>put it at the bottom of your deck. If you </x-card.normalrule>
<x-card.normalrule>searched through your Library, shuffle it.          </x-card.normalrule>
</text>
</x-card.phaserule>

</x-card>
