@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Baker's Dozen">
    <x-card.rulebox>
        <x-card.concept-card type="Draw" />
        <text y="80" filter="url(#solid)">
            <x-card.normalrule>Look at the top 13 cards of your Library.</x-card.normalrule>
            <x-card.normalrule>You may put 3 of them into your hand.</x-card.normalrule>
            <x-card.normalrule>Put the rest on the bottom of your Library in any order.</x-card.normalrule>
        </text>
    </x-card.rulebox>


</x-card>
