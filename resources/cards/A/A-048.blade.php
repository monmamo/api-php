@push('background')
{{ view('Upkeep.background') }}
@endpush

<x-card.flavortext>
<x-card.flavortext.line>Mostly error.</x-card.flavortext.line>
</x-card.flavortext>

<x-card :$cardNumber card-name="Trial and Error">
<x-card.rulebox>
<x-slot:normal>
    Put this card on the Battlefield.
    As long as this card is in the Battlefield,
    you may redo any attack or defense once.
    If the result improves, discard this card.
</x-slot:normal>
</x-card.rulebox>
</x-card>
