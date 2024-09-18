
@push('background')
{{ view('Vendor.background') }}
@endpush

<x-card :$cardNumber card-name="Delivery Service" >

<x-card.concept.staticon type="Vendor" x="530" />
<text>
<x-card.normalrule>Search your Library for an Item card.</x-card.normalrule>
<x-card.normalrule>Reveal it. Then put it in your hand.</x-card.normalrule>
    </text>

</x-card>
