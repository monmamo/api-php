<x-card.flavortext>
<x-card.flavortext.line>Bears a striking resemblance to Frank Abagnale.</x-card.flavortext.line>
</x-card.flavortext>

@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Copycat">


    
        <x-card.concept.staticon type="Draw" x="530" /> 
<text>
<x-card.normalrule>Shuffle your hand into your deck. </x-card.normalrule>
<x-card.normalrule>Choose another player. Count the number </x-card.normalrule>
<x-card.normalrule>of cards in his hand. Draw that many cards.</x-card.normalrule>
    </text>

</x-card>


 {{-- "_inspiration": Copycat PTCG card https://bulbapedia.bulbagarden.net/wiki/Copycat_(Raichu_Half_Deck_21) --}}
