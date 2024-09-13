@push('background')
{{ view('Draw.background') }}
@endpush

{{-- inspiration: https://bulbapedia.bulbagarden.net/wiki/Caitlin_(Plasma_Blast_78) --}}

<x-card  :$cardNumber card-name="Sleight of Hand">
    <x-card.rulebox>
        <x-card.concept-card type="Draw" /> 
        <x-slot:normal>
        Put any number of cards from your hand
        on the bottom of your Library in any order.
        Then, draw a card for each card you put
        on the bottom of your Library.
    </x-slot:normal>
</x-card.rulebox>

</x-card>


