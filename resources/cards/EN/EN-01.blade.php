@push('background')
{{ view('Trait.background') }}
<x-card.image-credit>
Image by Lorc on Game-Icons.net under CC BY 3.0
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Conductivity" >

    <g class="svg-hero"><?= view('Energos.icon') ?></g>

    'concepts' => ['Trait'],

    <x-slot:small>Requires Energos.</x-slot:small>
<text>
    TODO
</text>

</x-card>
