@push('background')
<x-card.background fill="#000000" />
<x-card.flavortext>
</x-card.flavortext>

@endpush
<x-card :$cardNumber card-name="Gold">

{{ view('Material.element-icon', ['symbol' => 'Au']) }}

<text y="500">
</text>
</x-card>