

@push('background')
{{ view('Attack.background') }}
@endpush

<x-card :$cardNumber card-name="Deathgrip">

    <x-card.rulebox>
        <x-card.concept-card type="Attack" />

<x-slot:normal>
        Does Multiplier x d4 damage.
        If the Defender's Defense fails to prevent all
        damage, it has no effect. The Defending
        Monster can no longer use Defenses
        while this Monster uses Deathgrip on it.        
</x-slot:normal>
</x-card.rulebox>
</x-card>
