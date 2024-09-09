<x-card.Defense :$cardNumber card-name="Water Shield" >
    <g class="svg-hero"><?= view('Aquos.icon') ?></g>
<x-slot:card-rules>
    Requires Aquos.
    For each Water card attached to this Monster,
    prevent 1d6 damage. Discard all Water cards
    attached to this Monster
    (even if they weren't needed to prevent damage).
</x-slot:card-rules>
</x-card.Defense>
