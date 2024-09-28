@push('background')
{{ view('Bystander.background') }}
'flavor-text' => [
    'Touch is the best medicine.'    
</x-card.flavor-text>
@endpush

<x-card :$cardNumber :$dx :$dy card-name="Masseuse">
    
        'concepts' => ['Bystander'],
        'concepts' => ['Female'],
        'concepts' => ['Integrity'],

        <text y="500" filter="url(#solid)">
<x-card.smallrule>{{ trans_choice('rules.player-limit',1) }}</x-card.smallrule>
        </text>

<x-card.phaserule type="Resolution" :lines="3">
    <text >
<x-card.normalrule>After all attacks & skills</x-card.normalrule>
<x-card.normalrule>are resolved, remove 4 damage from each</x-card.normalrule>
<x-card.normalrule>of your Monsters that is not Knocked Out.</x-card.normalrule>
</text>
</x-card.phaserule>


</x-card>