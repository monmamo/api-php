@push('background')
{{ view('Defense.background') }}
@endpush

<x-card :$cardNumber card-name="Fire Shield" >
    <g class="svg-hero"><?= view('Pyros.icon') ?></g>
<x-card.rulebox>
    <x-card.concept-card type="Defense" />
    <x-slot:normal>
    Requires Pyros.
    For each Fire card attached to this Monster,
    prevent 1d6 damage. Discard all Fire cards
    attached to this Monster
    (even if they weren't needed to prevent damage).
</x-slot:normal>
</x-card.rulebox>
</x-card>