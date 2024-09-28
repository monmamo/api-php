@push('background')
{{ view('Attack.background') }}
<x-card.image-credit>Image by Lorc on Game-Icons.net under CC BY 3.0</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Bolt of Lightning" >

    <g class="svg-hero"><?= view('Energos.icon') ?></g>
    
        'concepts' => ['Attack'],
        <text y="500" filter="url(#solid)">
            <x-card.smallrule>Requires Energos.</x-card.smallrule>
<x-card.normalrule>Discard all Electricity cards from the attacking </x-card.normalrule>
<x-card.normalrule>Monster. Roll 2d6 for each Electricity card </x-card.normalrule>
<x-card.normalrule>discarded from this Monster. </x-card.normalrule>
<x-card.normalrule>The damage done is the sum of these rolls.</x-card.normalrule>
        </text>

    </x-card>
