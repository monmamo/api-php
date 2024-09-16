@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Water Pulse">
    <g class="svg-hero"><?= view('Aquos.icon') ?></g>
<x-card.rulebox>
    <x-card.concept-card type="Trait" />
    <text y="80" filter="url(#solid)">
<x-card.smallrule>Requires Aquos.</x-card.smallrule>
<x-card.smallrule>Use when this Monster attacks or defends.</x-card.smallrule>
<x-card.normalrule>When resolving, discard 1d6 Water cards</x-card.normalrule>
<x-card.normalrule>from this Monster. The defending or attacking </x-card.normalrule>
<x-card.normalrule>Monster takes 1d6 damage for each Water </x-card.normalrule>
<x-card.normalrule>card actually discarded.</x-card.normalrule>
    </text>
</x-card.rulebox>
</x-card>
