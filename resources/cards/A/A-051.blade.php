@push('background')
{{ view('Bystander.background') }}
@endpush


<x-card :$cardNumber card-name="Waste Manager" >

    <x-card.rulebox>
        <x-card.concept.row>
            <x-card.concept.card type="Bystander" x="0" width="380" />
            <x-card.concept.card type="Integrity" x="380" width="230" >1d6</x-card.concept>
        </x-card.concept.row>
<x-slot:normal>
        This player does not have his own discard pile.
        Put existing and henceforth  discards 
        at the bottom of your Library.
    </x-slot:normal>
</x-card.rulebox>
</x-card>