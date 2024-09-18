@push('background')
{{ view('Trait.background') }}
<x-card.image-credit>
    @ai
</x-card.image-credit>
@endpush


<x-card :$cardNumber card-name="Biting">
    <image x="0" y="0" class="hero" href="@local(A006.png)" source="https://www.freepik.com/free-photo/hand-pouring-food-birds_1713221.htm" />

    
        <x-card.concept.staticon type="Trait" x="530" />


    

    <svg id="titlebox" x="50" y="600" width="550" height="165" viewBox="0 0 550 165">

        <rect x="0" y="0" width="550" height="165" fill="#FFFFFF" fill-opacity="0.75" />
        <x-card.titlebox.icon card-type="Attack" />

        <text x="345" y="30" text-anchor="middle" class="cardtype" alignment-baseline="hanging">ATTACK</text>
        <text x="345" y="90" text-anchor="middle" class="cardname" alignment-baseline="middle">Bite</text>
        <text x="345" y="140" text-anchor="middle" font-size="30px" alignment-baseline="baseline">Does Speed×3 damage.</text>

    </svg>

</x-card>
