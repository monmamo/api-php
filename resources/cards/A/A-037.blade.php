{{-- inspiration: https://bulbapedia.bulbagarden.net/wiki/Canceling_Cologne_(Astral_Radiance_136) --}}

@push('background')
<image x="0" y="0" href="@local(fullsize/cologne.jpg)" />
@endpush

<x-card.image-credit>
Image by Freepik
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Eau de Resistance">
<x-card.concept.staticon type="Upkeep" x="530" />
    <x-card.concept.staticon type="Item" x="530" />

    <text x="50%" y="450" width="100%" height="auto" filter="url(#solid)">
@normalrule(Attach to a Monster.)
@normalrule(For 1d4 turns, this Monster)
@normalrule(cannot be the target of an Attack.)
</text>

</x-card>

