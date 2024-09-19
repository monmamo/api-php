@push('background')
<x-card.background fill="#000000" />
<x-card.flavortext>
</x-card.flavortext>

@endpush
<x-card :$cardNumber card-name="Helium">

{{ view('Material.element-icon', ['symbol' => 'He']) }}

<text y="500">
</text>
</x-card>