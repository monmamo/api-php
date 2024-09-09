@push('background')
<image x="0" y="0" href="@local(fullsize/cologne.jpg)" />
@endpush

<x-card.Upkeep :$cardNumber card-name="Eau de Resistance">
    <x-card.concept type="Item" />

    <text x="50%" y="450" width="100%" height="auto" filter="url(#solid)">
@normalrule(Attach to a Monster.)
@normalrule(For 1d4 turns, this Monster)
@normalrule(cannot be the target of an Attack.)
</text>

@push('image-credit')
Image by Freepik
@endpush
</x-card.Upkeep>
{{-- inspiration: https://bulbapedia.bulbagarden.net/wiki/Canceling_Cologne_(Astral_Radiance_136) --}}

