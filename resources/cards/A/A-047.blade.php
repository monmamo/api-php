<x-card.Trait :$cardNumber card-name="Biolure">

<x-slot:card-rules>
    When not your turn, roll 1d6 for each Monster in  
    play until you get @dieroll(5) or @dieroll(6). The selected Monster 
    cannot attack any other Monster on this turn.
</x-slot:card-rules>
</x-card.Trait>
