<x-card.Draw :$cardNumber card-name="Copycat">


    @push('flavor-text')
<x-card.flavor-text-line>Bears a striking resemblance to Frank Abagnale.</x-card.flavor-text-line>
@endpush

    <x-slot:card-rules>
        Shuffle your hand into your deck. 
        Choose another player. Count the number 
        of cards in his hand. Draw that many cards.
    </x-slot:card-rules>
</x-card.Draw>


<?php
    // "_inspiration": [
    //     "Copycat PTCG card",
    //     "https://bulbapedia.bulbagarden.net/wiki/Copycat_(Raichu_Half_Deck_21)"
    // ]
