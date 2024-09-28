@push('background')
{{ view('Defense.background') }}
<x-card.image-credit>
    Image by Lorc on Game-Icons.net under CC BY 3.0
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Energy Shield">

    <g class="svg-hero"><?= view('Energos.icon') ?></g>
    
        'concepts' => ['Defense'],

        <x-slot:small>Requires Energos.</x-slot:small>
        <text>
            <x-card.normalrule>For each Energy card attached to this Monster,</x-card.normalrule>
            <x-card.normalrule>prevent 1d6 damage. Discard all Energy</x-card.normalrule>
            <x-card.normalrule>cards attached to this Monster</x-card.normalrule>
            <x-card.normalrule>(even if they weren't needed to prevent damage).</x-card.normalrule>
        </text>
    
</x-card>
