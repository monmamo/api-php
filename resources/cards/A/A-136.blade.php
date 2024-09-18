@push('background')
{{ view('Draw.background') }}
@endpush

{{-- This needs something to be more distinct from Junk Patrol (A-137). --}}

<x-card :$cardNumber card-name="Junk from the Trunk">
    
        <x-card.concept.staticon type="Draw" x="530" />
        <text>Put an Item card from your Discard into your Library.</text>
    

</x-card>
