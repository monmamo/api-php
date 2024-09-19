@push('background')
<x-card.background fill="#000000" />
<x-card.flavortext>
</x-card.flavortext>
{{-- https://www.rsc.org/periodic-table/element/47/silver --}}

@endpush
<x-card :$cardNumber card-name="Silver">

{{ view('Material.element-icon', ['symbol' => 'Ag']) }}

<text y="500">
</text>
</x-card>