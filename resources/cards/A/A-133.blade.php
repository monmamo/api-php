@push('background')
{{ view('Bystander.background') }}
@endpush

<x-card :$cardNumber :$dx :$dy card-name="Mascot">
        
        <x-card.concept.staticon type="Bystander" dx="2" />
        <x-card.concept.staticon type="Integrity" value="1d4" />
        
        <text y="500" filter="url(#solid)">
            <x-card.smallrule>{{ trans_choice('rules.player-limit',1) }}</x-card.smallrule>
        </text>
        
<x-card.phaserule type="Resolution" lines="2">
    <text >
<x-card.normalrule>Your Monster's attacks </x-card.normalrule>
    <x-card.normalrule>do an additional 1d4 damage.</x-card.normalrule>
</text>
</x-card.phaserule>


</x-card>