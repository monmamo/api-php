@push('flavor-text')
<x-card.flavor-text-line>Here's lookin' at you, kid.</x-card.flavor-text-line>
@endpush
@push('image-credit')
Image by catalyststuff on Freepik
@endpush
{{-- https://www.freepik.com/free-vector/flying-drone-camera-cartoon-vector-icon-illustration-object-technology-icon-concept-isolated-flat_25847529.htm --}}

<x-card.Drone :$cardNumber card-name="Spy Drone">
    <image x="0" y="0" class="hero" href="@local(A312.jpg)" />
    <x-card.concept type="Item">Item</x-card.concept>
    <x-card.concept type="DamageCapacity" index="1">5</x-card.concept>
    <x-card.concept type="Level" index="2">5</x-card.concept>
    <x-card.concept type="Size" index="3">4</x-card.concept>
    <x-card.concept type="Speed" index="4">20</x-card.concept>
    <x-slot:card-rules>
        Upkeep phase: You may ask one opponent
to show you their hand.
(Only you get to see the hand.)
</x-slot:card-rules>
</x-card.Drone>
