{{-- Compare Spy Drone (A-089). --}}
{{--inspiration:: Hand Scope https://bulbapedia.bulbagarden.net/wiki/Hand_Scope_(Phantom_Forces_96) --}} 

@push('background') 
{{ view('Item.background') }}
<x-card.flavortext>
<x-card.flavortext.line>Here's lookin' at you, kid.</x-card.flavortext.line>
</x-card.flavortext>
@endpush

<x-card :$cardNumber card-name="Hand Scope">
    

    <x-card.concept.staticon type="Item" :x="610-64"  />
    
    <x-card.phaserule type="Upkeep"  height="130"><text >    
        <x-card.normalrule>Roll 1d4. If @dieroll(4), you may ask </x-card.normalrule>
<x-card.normalrule>one opponent to show you their hand.</x-card.normalrule>
<x-card.normalrule>(Only you get to see the hand.)</x-card.normalrule>
</text></x-card.phaserule>  </x-card>
