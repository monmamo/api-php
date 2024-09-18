@push('background')
{{ view('Bystander.background') }}
@endpush


<x-card :$cardNumber card-name="Waste Manager" >

    
        <x-card.concept.row>
            <x-card.concept.card type="Bystander" x="0" width="380" />
            <x-card.concept.card type="Integrity" x="380" width="230" >1d6</x-card.concept>
        </x-card.concept.row>
<text>
<x-card.normalrule>This player does not have his own discard pile.</x-card.normalrule>
<x-card.normalrule>Put existing and henceforth  discards </x-card.normalrule>
<x-card.normalrule>at the bottom of your Library.</x-card.normalrule>
    </text>

</x-card>