@push('background')
{{ view('Defense.background') }}
@endpush

<x-card :$cardNumber card-name="Water Shield" >
    <g class="svg-hero"><?= view('Aquos.icon') ?></g>
<x-card.rulebox>
    <x-card.concept-card type="Defense" />
    <text y="70" filter="url(#solid)">
        <x-card.smallrule>Requires Aquos.</x-card.smallrule>
<x-card.normalrule>For each Water card attached to this Monster,</x-card.normalrule>
<x-card.normalrule>prevent 1d6 damage. Discard all Water cards</x-card.normalrule>
<x-card.normalrule>attached to this Monster</x-card.normalrule>
<x-card.normalrule>(even if they weren't needed to prevent damage).</x-card.normalrule>
    </text>
</x-card.rulebox>
</x-card>
