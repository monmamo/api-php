@push('background')
<x-card.background fill="#000000" />
<x-card.flavortext>
</x-card.flavortext>

@endpush
<x-card :$cardNumber card-name="Tin">

{{ view('Material.element-icon', ['symbol' => 'Sn']) }}

<text y="500">
</text>
</x-card>