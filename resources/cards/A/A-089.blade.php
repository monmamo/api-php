@push('background') 
{{ view('Drone.background') }}
<x-card.flavortext>
<x-card.flavortext.line>Here's lookin' at you, kid.</x-card.flavortext.line>
</x-card.flavortext>
<x-card.image-credit>Image by catalyststuff on Freepik</x-card.image-credit>
@endpush
{{-- https://www.freepik.com/free-vector/flying-drone-camera-cartoon-vector-icon-illustration-object-technology-icon-concept-isolated-flat_25847529.htm --}}

<x-card :$cardNumber card-name="Spy Drone">
    <image class="hero" href="@local(A312.jpg)" />

    <x-card.rulebox>
        <x-card.concept-card type="Drone" />
        <x-card.concept.row>
            <x-card.concept.card type="DamageCapacity" x="0" width="100">5</x-card.concept.card>
            <x-card.concept.card type="Level" x="100" width="100">5</x-card.concept.card>
                <x-card.concept.card type="Size" x="200" width="100" >25</x-card.concept.card>
                <x-card.concept.card type="Speed" x="300" width="100" >4</x-card.concept.card>
                </x-card.concept.row>

    <x-card.phaserule type="Upkeep" y="185" height="130">
        <text >    
<x-card.normalrule>You may ask one opponent</x-card.normalrule>
<x-card.normalrule>to show you their hand.</x-card.normalrule>
<x-card.normalrule>(Only you get to see the hand.)</x-card.normalrule>
</text>
</x-card.phaserule>

            </x-card.rulebox>
</x-card>
