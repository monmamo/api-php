@push('background')
<x-card.background fill="#000000" />
<x-card.flavortext>
</x-card.flavortext>
{{-- https://www.rsc.org/periodic-table/element/13/aluminium --}}

@endpush
<x-card :$cardNumber card-name="Aluminum">

{{ view('Material.element-icon', ['symbol' => 'Al']) }}

<text y="500">
</text>
</x-card>