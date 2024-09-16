@push('background')
{{ view('Mobster.background') }}
<x-card.image-credit>
    @ai
    </x-card.image-credit>
    @endpush

{{-- inspiration: Hooligans Jim and Cas PTCG card https://bulbapedia.bulbagarden.net/wiki/Hooligans_Jim_%26_Cas_(Dark_Explorers_95) --}}

<x-card :$cardNumber card-name="Enforcer">

    <image x="0" y="0" class="hero" href="@local(A072.png)" />
        <x-card.rulebox>
            <x-card.concept.row>
                <x-card.concept.card type="Mobster" x="0" width="190" />
                <x-card.concept.card type="Male" x="190" width="190" />
                <x-card.concept.card type="Integrity" x="380" width="230" >1d4</x-card.concept>
                </x-card.concept.row>
                <x-slot:small>
                   Limit 1 per player on the Battlefield.
                    </x-slot:small>                   
                    <x-card.phaserule type="Upkeep" y="170" height="130">
                        <text >
<x-card.normalrule>You may choose a random card</x-card.normalrule>
<x-card.normalrule>from an opponent's hand. The opponent </x-card.normalrule>
<x-card.normalrule>must reveal that card to all players.</x-card.normalrule>
<x-card.normalrule>You may have that player discard that card</x-card.normalrule>
<x-card.normalrule>or shuffle it back into their Library.        </x-card.normalrule>
</text>
</x-card.phaserule>

            </x-card.rulebox>
</x-card>
