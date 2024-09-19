@push('background')
<x-card.background fill="#000000" />
<x-card.flavortext>
</x-card.flavortext>

@endpush
<x-card :$cardNumber card-name="Neon">

{{ view('Material.element-icon', ['symbol' => 'Ne']) }}

<text y="500">
</text>
</x-card>