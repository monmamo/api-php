{{-- inspiration: https://bulbapedia.bulbagarden.net/wiki/Canceling_Cologne_(Astral_Radiance_136) --}}

@push('background')
<image x="0" y="0" href="@local(fullsize/cologne.jpg)" />
<x-card.image-credit>Image by Freepik</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Eau de Resistance">
<x-card.concept.staticon type="Upkeep" x="530" />
    <x-card.concept.staticon type="Item" x="530" />

    <x-card.phaserule type="Upkeep" y="0" height="135">
        <text >
      <x-card.normalrule>When a Monster on this</x-card.normalrule>
    </text>
</x-card.phaserule>

<x-card.phaserule type="Command" y="0" height="135">
    <text >
        <x-card.normalrule>For 1d4 turns, this Monster</x-card.normalrule>
            <x-card.normalrule>cannot be the target of an Attack.</x-card.normalrule>
</text>

</x-card>

