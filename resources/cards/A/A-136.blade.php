@push('background')
{{ view('Draw.background') }}
@endpush

{{-- This needs something to be more distinct from Junk Patrol (A-137). --}}

<x-card :$cardNumber :$dx :$dy card-name="Junk from the Trunk">
    
        <x-card.concept.staticon type="Draw"  />


        <x-card.phaserule type="Draw" lines="2">
                <text>
                        <x-card.normalrule>Put an Item card from your </x-card.normalrule>
                                <x-card.normalrule>Discard into your Library.</x-card.normalrule></text></x-card.phaserule>
    

</x-card>
