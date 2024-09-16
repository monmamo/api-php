@push('background')
{{ view('Defense.background') }}
@endpush

<x-card :$cardNumber card-name="Intercept">
<x-card.rulebox>
<x-card.concept-card type="Defense" />

<x-slot:small>
A Monster may use this Defense if it is not subject to an Attack.
</x-slot:small>
<x-slot:normal>
        Choose an opposing Monster that is 
        attacking another Monster. 
        If this Monster’s Speed is higher, 
        this Monster takes the damage 
        that Attack would have done.
        </x-slot:normal>
</x-card.rulebox>
    </x-card.Defense>
