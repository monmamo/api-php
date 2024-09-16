
@push('background')
{{ view('Trait.background') }}
<x-card.image-credit>
Image by Lorc on Game-Icons.net under CC BY 3.0
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Conductivity" >

    <g class="svg-hero"><?= view('Energos.icon') ?></g>
<x-card.rulebox>
    <x-card.concept-card type="Trait" />

    <x-slot:small>Requires Energos.</x-slot:small>
<x-slot:normal>
    TODO
</x-slot:normal>
</x-card.rulebox>
</x-card>
