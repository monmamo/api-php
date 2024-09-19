@push('background')
<x-card.background fill="#000000" />
<x-card.flavortext>
</x-card.flavortext>

@endpush
<x-card :$cardNumber card-name="Copper">

{{ view('Material.element-icon', ['symbol' => 'Cu']) }}

<text y="500">
</text>
</x-card>