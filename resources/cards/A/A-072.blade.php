@push('image-credit')
@ai
@endpush

<x-card.Mobster :$cardNumber card-name="Enforcer">

    <image x="0" y="0" class="hero" href="@local(A072.png)" />
    <x-card.concept type="Integrity">1d4</x-card.concern>
        <x-card.concept type="Male" index="1" />
    <x-slot:card-rules>
        Limit 1 per player on Battlefield.
        Upkeep phase: You may choose a random card
        from an opponent's hand. The opponent must
        reveal that card to all players.
        You may have that player discard that card
        or shuffle it back into their Library.        
</x-slot:card-rules>
</x-card.Mobster>
    
    {{-- "_inspiration": [
Hooligans Jim and Cas PTCG card
https://bulbapedia.bulbagarden.net/wiki/Hooligans_Jim_%26_Cas_(Dark_Explorers_95) --}}
