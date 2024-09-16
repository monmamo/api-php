@push('background')
{{ view('Mobster.background') }}
@endpush

<x-card :$cardNumber card-name="Hacker">
    <x-card.rulebox>
        <x-card.concept-card type="Mobster" /> 

        <x-card.phaserule type="Upkeep" y="170" height="130">
            <text >
<x-card.normalrule>Look at the top 3 cards of your opponent's deck </x-card.normalrule>
<x-card.normalrule>and choose 1 of them (without revealing them or </x-card.normalrule>
<x-card.normalrule>showing these cards to any other opponent). </x-card.normalrule>
<x-card.normalrule>Your opponent shuffles the other cards back into </x-card.normalrule>
<x-card.normalrule>their deck. Then, put the card you chose </x-card.normalrule>
<x-card.normalrule>on top of their deck.</x-card.normalrule>
</text>
</x-card.phaserule>

            </x-card.rulebox>
</x-card>
