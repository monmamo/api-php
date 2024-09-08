<x-card :$cardNumber :$cardName card-type="Setup">
    <x-linear-gradient-background start="#480080" end="#5a0070" />
    <g class="standard-background-icon">
<?php require resource_path('concepts/Setup/icon.blade.php'); ?>
</g>
    
        <x-card.rulebox>
            <x-slot:small>Can be played only during the Setup phase.</x-slot:small>
            @isset($cardRules)
                <x-slot:normal>{{$cardRules}}</x-slot:normal>
            @endisset
        </x-card.rulebox>
        {{$slot ?? null}}
    </x-card>
