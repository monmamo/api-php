<x-card.flavortext>
<x-card.flavortext.line>Bears a striking resemblance to Frank Abagnale.</x-card.flavortext.line>
</x-card.flavortext>

@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Copycat">


    <x-card.rulebox>
        <x-card.concept-card type="Draw" /> 
<x-slot:normal>
        Shuffle your hand into your deck. 
        Choose another player. Count the number 
        of cards in his hand. Draw that many cards.
    </x-slot:normal>
</x-card.rulebox>
</x-card>


 {{-- "_inspiration": Copycat PTCG card https://bulbapedia.bulbagarden.net/wiki/Copycat_(Raichu_Half_Deck_21) --}}
