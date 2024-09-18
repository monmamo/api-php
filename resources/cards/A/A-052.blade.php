

@push('background')
{{ view('Attack.background') }}
@endpush

<x-card :$cardNumber card-name="Deathgrip">

    
        <x-card.concept.staticon type="Attack" x="530" />

<text>
<x-card.normalrule>Does Multiplier x d4 damage.</x-card.normalrule>
<x-card.normalrule>If the Defender's Defense fails to prevent all</x-card.normalrule>
<x-card.normalrule>damage, it has no effect. The Defending</x-card.normalrule>
<x-card.normalrule>Monster can no longer use Defenses</x-card.normalrule>
<x-card.normalrule>while this Monster uses Deathgrip on it.        </x-card.normalrule>
</text>

</x-card>
