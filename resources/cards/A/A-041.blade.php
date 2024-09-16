@push('background')
{{ view('Attack.background') }}
@endpush

<x-card.flavortext>
<x-card.flavortext.line>Give it ALL you got.</x-card.flavortext.line>
</x-card.flavortext>

<x-card :$cardNumber card-name="Body Slam" >
<x-card.rulebox>
    <x-card.concept-card type="Attack" />
    <x-slot:normal>
Does 3×Size damage to defending Monster.
Does 2×Size damage to self.
</x-slot:normal>
</x-card.rulebox>
</x-card.Attack>
