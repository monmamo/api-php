@push('background')
{{ view('Draw.background') }}
@endpush

{{-- This needs something to be more distinct from Junk Patrol (A-137). --}}

<x-card :$cardNumber card-name="Junk from the Trunk">
    <x-card.rulebox>
        <x-card.concept-card type="Draw" />
        <x-slot:normal>Put an Item card from your Discard into your Library.</x-slot:normal>
    </x-card.rulebox>

</x-card>
