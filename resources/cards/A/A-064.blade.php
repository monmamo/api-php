<x-card.image-credit>
Image by Lorc on Game-Icons.net under CC BY 3.0
</x-card.image-credit>
@endpush

@push('background')
{{ view('Defense.background') }}
@endpush

<x-card :$cardNumber card-name="Energy Shield" >

    <g class="svg-hero"><?= view('Energos.icon') ?></g>
<x-card.rulebox>
    <x-card.concept-card type="Defense" />

    <x-slot:small>Requires Energos.</x-slot:small>
<x-slot:normal>    
    For each Energy card attached to this Monster,
    prevent 1d6 damage. Discard all Energy 
    cards attached to this Monster
    (even if they weren't needed to prevent damage).
</x-slot:normal>
</x-card.rulebox>
</x-card>
