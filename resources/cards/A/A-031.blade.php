@push('background')
{{ view('Trait.background') }}
<x-card.image-credit>Image by wirestock on Freepik</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Dual Cranial Horns">
    <image x="0" y="0" class="hero" href="@local(A064.jpg)" source="https://www.freepik.com/free-photo/closeup-shot-beautiful-thompson-s-gazelle_10292458.htm" />

    <x-card.concept.staticon type="Trait" x="530" /> 
    <text>
<x-card.normalrule>Size +6.</x-card.normalrule>
<x-card.normalrule>Gives the attack “Horn Attack”</x-card.normalrule>
<x-card.normalrule>which does Speed×2 damage.</x-card.normalrule>
</text>

</x-card>