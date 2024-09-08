@push('background')
<image x="0" y="0" href="@local(fullsize/cologne.jpg)" />
@endpush

<x-card.Upkeep :$cardNumber card-name="Eau de Resistance">
    <x-card.concept type="Item" />

    <text x="50%" y="450" width="100%" height="auto" filter="url(#solid)">
<x-card.normal-rule-line>Attach to a Monster.</x-card.normal-rule-line>
<x-card.normal-rule-line>For 1d4 turns, this Monster</x-card.normal-rule-line>
<x-card.normal-rule-line>cannot be the target of an Attack.</x-card.normal-rule-line>
</text>

@push('image-credit')
Image by Freepik
@endpush
</x-card.Upkeep>
{{-- inspiration: https://bulbapedia.bulbagarden.net/wiki/Canceling_Cologne_(Astral_Radiance_136) --}}

