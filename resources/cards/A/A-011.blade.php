
    
    <x-card.Skill :$cardNumber card-name="Flash of Lightning">
        <g class="svg-hero"><?= view('Energos.icon') ?></g>
    <x-slot:card-rules>
        Requires Energos.
        Discard all Electricity cards attached to this Monster.
        Each other Monster in play takes 1d6 damage for each
        Electricity card discarded. Only this Monster
        may attack until and through this player’s next turn.        
</x-slot:card-rules>
</x-card.Skill>
