
@push('background')
{{ view('Environment.background') }}
@endpush

    <x-card :$cardNumber card-name="Flash of Lightning">
        <g class="svg-hero"><?= view('Energos.icon') ?></g>

        <x-card.rulebox>
            <x-card.concept-card type="Skill" />
            <x-slot:small>Requires Energos.</x-slot:small>
                <x-slot:normal>
        Discard all Electricity cards attached to 
        this Monster. Each other Monster in play takes 
        1d6 damage for each Electricity card discarded. 
        Only this Monster may attack until & through 
        this player’s next turn.        
    </x-slot:normal>
</x-card.rulebox>

</x-card.Skill>
