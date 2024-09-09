<x-card.Attack :$cardNumber card-name="Bolt of Lightning" >
    <g class="svg-hero"><?= view('Energos.icon') ?></g>
    <x-slot:card-rules>
        Requires Energos.
        Discard all Electricity cards from the attacking 
        Monster. Roll 2d6 for each Electricity card 
        discarded from this Monster. 
        The damage done is the sum of these rolls.
        </x-slot:card-rules>
    </x-card.Attack>
