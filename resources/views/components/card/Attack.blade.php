@push('background')
<x-linear-gradient-background start="{{\App\Enums\Color::AttackGradientBottom}}" end="{{\App\Enums\Color::AttackGradientTop}}" />
<g class="standard-background-icon" fill="{{\App\Enums\Color::Attack}}">
<?= view('Attack.icon') ?>
</g>
@endpush


<x-card :$cardNumber :$cardName card-type="Attack">


    <x-card.rulebox>
        <x-slot:small>Play when declaring an attack in the Declaration Phase.</x-slot:normal>
        @isset($cardRules)
            <x-slot:normal>{{$cardRules}}</x-slot:normal>
        @endisset
    </x-card.rulebox>
    {{$slot ?? null}}

</x-card>

