@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Gather Fire">
    <g class="svg-hero"><?= view('Pyros.icon') ?></g>

    <x-card.rulebox>
    <x-card.concept-card type="Draw" /> 

    <text y="80" filter="url(#solid)">
<x-card.normalrule>Transfer a Fire Mana card from your Discard</x-card.normalrule>
<x-card.normalrule>pile to one of your Pyros Monsters.</x-card.normalrule>
    </text>
</x-card.rulebox>
</x-card>
