@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Product Recall">

    'concepts' => ['Draw'],

    <x-card.phaserule type="Draw" height="260">
        <text>
            <x-card.normalrule>Choose one of your opponents.</x-card.normalrule>
            <x-card.normalrule>That opponent reveals his or her hand</x-card.normalrule>
            <x-card.normalrule>& shuffles all Item cards found there into </x-card.normalrule>
            <x-card.normalrule>his or her Library. Then, draw a number of </x-card.normalrule>
            <x-card.normalrule>cards equal to the number of Item cards your</x-card.normalrule>
            <x-card.normalrule>opponent shuffled into his or her Library.</x-card.normalrule>
        </text></x-card.phaserule> </x-card>
