<x-card.Defense :$cardNumber card-name="Energy Shield" >
    <g class="svg-hero"><?= view('Energos.icon') ?></g>
<x-slot:card-rules>
    Requires Energos.
    For each Fire card attached to this Monster,
    prevent 1d6 damage. Discard all Energy cards
    attached to this Monster
    (even if they weren't needed to prevent damage).
</x-slot:card-rules>
</x-card.Defense>
