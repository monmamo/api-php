{{-- Compare Hand Scope (A-115). --}}

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

    <x-card.concept.staticon type="Drone" :dy="6" />
    <x-card.concept.staticon type="Item" />
    <x-card.concept.staticon type="DamageCapacity" value="5" />
    <x-card.concept.staticon type="Level" value="5" />
    <x-card.concept.staticon type="Size" value="25" />
    <x-card.concept.staticon type="Speed" value="4" />

    <x-card.phaserule type="Upkeep" lines="3"><text>
            <x-card.normalrule>You may ask one opponent</x-card.normalrule>
            <x-card.normalrule>to show you their hand.</x-card.normalrule>
            <x-card.normalrule>(Only you get to see the hand.)</x-card.normalrule>
        </text></x-card.phaserule>
</x-card>
