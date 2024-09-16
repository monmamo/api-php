@push('background')
{{ view('Catastrophe.background') }}
@endpush

<x-card :$cardNumber card-name="Extraordinary Comeback" >
<x-card.concept-card type="Catastrophe" />

</x-card.Catastrophe>
    <x-card.rulebox>
<x-slot:normal>The player playing this card may remove all damage from his Monsters.</x-slot:normal>
</x-card.rulebox>
