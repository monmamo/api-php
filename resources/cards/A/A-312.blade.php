<?php

    <x-slot:card-rules>

</x-slot:card-rules>
 [
Upkeep phase: You may ask one opponent
to show you their hand.
(Only you get to see the hand.)
<x-card.Drone :$cardNumber card-name="Spy Drone">

</x-card.Drone>
    "damage_capacity": 5,
    @push('flavor-text')
<x-card.flavor-text-line>Here's lookin' at you, kid.</x-card.flavor-text-line>
@endpush,
    "image": {
        <image x="0" y="0" class="hero" href="@local(A312.jpg)" />
        @push('image-credit')
Image by catalyststuff on Freepik
@endpush
{{-- https://www.freepik.com/free-vector/flying-drone-camera-cartoon-vector-icon-illustration-object-technology-icon-concept-isolated-flat_25847529.htm --}}
    },
    "size": 4,
    "speed": 20,
    "level": 5,
    "subtypes": [
Item
    ]
}
