@push('background')
{{ view('Draw.background') }}
<x-card.flavortext>
        <x-card.flavortext.line>Bears a striking resemblance to Frank Abagnale.</x-card.flavortext.line>
        </x-card.flavortext>
        @endpush

<x-card :$cardNumber card-name="Copycat">
        <x-card.phaserule type="Resolution" height="135">
                <text >
              <x-card.normalrule>Shuffle your hand into your deck. </x-card.normalrule>
<x-card.normalrule>Choose another player. Count the number </x-card.normalrule>
<x-card.normalrule>of cards in his hand. Draw that many cards.</x-card.normalrule>
    </text>
</x-card.phaserule>

</x-card>


 {{-- "_inspiration": Copycat PTCG card https://bulbapedia.bulbagarden.net/wiki/Copycat_(Raichu_Half_Deck_21) --}}
