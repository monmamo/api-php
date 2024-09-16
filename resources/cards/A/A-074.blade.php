<x-card.image-credit>
@ai
</x-card.image-credit>
@endpush


@push('background')
{{ view('Place.background') }}
@endpush


<x-card :$cardNumber card-name="Shopping Center">
    <image x="0" y="0" class="hero" href="@local(A246.jpeg)" />
<x-card.rulebox>
<x-card.concept-card type="Place" />
<x-slot:normal>
        Draw phase (every player): You may search
        your Library for a Vendor card and play it
        immediately. If you do so, return the card
        to the Library and shuffle your Library.
        Then you may take another Draw phase.
    </x-slot:normal>
</x-card.rulebox>
</x-card>

<?php
// 
// 
// "_": "https://www.notion.so/monmamo/Shopping-Center-80a8d2a9d3764546a36f9bcea642fe4f?pvs=4#ee8b43f87ad949578920750b1fc2fe8b"
