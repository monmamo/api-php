@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Baker's Dozen">
    <x-card.rulebox>
        <x-card.concept-card type="Draw" /> 
        <x-slot:normal>
Look at the top 13 cards of your Library.
You may put 3 of them into your hand.
Put the rest on the bottom of your Library in any order.
</x-slot:normal>
    
</x-card.rulebox>
  

</x-card>
