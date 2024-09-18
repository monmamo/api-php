@push('background')
{{ view('Defense.background') }}
@endpush

<x-card :$cardNumber card-name="Fire Shield" >
    <g class="svg-hero"><?= view('Pyros.icon') ?></g>

    <x-card.concept.staticon type="Defense" x="530" />
    <text>
<x-card.normalrule>Requires Pyros.</x-card.normalrule>
<x-card.normalrule>For each Fire card attached to this Monster,</x-card.normalrule>
<x-card.normalrule>prevent 1d6 damage. Discard all Fire cards</x-card.normalrule>
<x-card.normalrule>attached to this Monster</x-card.normalrule>
(even if they weren't needed to prevent damage).
</text>

</x-card>