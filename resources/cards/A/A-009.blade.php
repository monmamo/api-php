@push('background')
{{ view('Trait.background') }}
@endpush

<x-card.image-credit>
Image by Lorc on Game-Icons.net under CC BY 3.0
</x-card.image-credit>
@endpush


<x-card :$cardNumber card-name="Sparking">
        <g class="svg-hero"><?= view('Energos.icon') ?></g>
        <x-card.rulebox>
            <x-card.concept-card type="Trait" /> 
            <x-slot:normal>
            Requires Energos.
        When this Monster attacks or defends,
        you may have this Monster discard any 
        number of Electricity cards.
        For each Electricity card discarded,
        the attacking or defending Monster 
        takes 1d6 damage.        
    </x-slot:normal>
</x-card.rulebox>

</x-card>
