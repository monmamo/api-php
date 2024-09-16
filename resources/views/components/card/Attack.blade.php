@push('background')
@endpush


<x-card :$cardNumber :$cardName card-type="Attack">


    <x-card.rulebox>
        <x-slot:small></x-slot:normal>
        @isset($cardRules)
            <x-slot:normal>{{$cardRules}}</x-slot:normal>
        @endisset
    </x-card.rulebox>
    {{$slot ?? null}}

</x-card>

