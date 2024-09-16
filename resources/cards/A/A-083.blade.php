@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Farmer's Refuse">

    <x-card.rulebox>
<x-card.concept-card type="Draw" />

<text y="100" filter="url(#solid)">
    <x-card.normalrule>Discard any number of cards from your hand.</x-card.normalrule>
    <x-card.normalrule>For each card discarded, search your Discard </x-card.normalrule>
    <x-card.normalrule>for a Monster or Mana card.</x-card.normalrule>
    <x-card.normalrule>Reveal those cards, then put them in your hand.</x-card.normalrule>
    </text>
    
</x-card.rulebox>
</x-card>