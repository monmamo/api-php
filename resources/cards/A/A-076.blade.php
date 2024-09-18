@push('background')
{{ view('Skill.background') }}
@endpush

{{-- inspiration: Brock's Primeape's "Scram" power. --}}

<x-card :$cardNumber card-name="Scram" >
    <image x="0" y="0" class="hero" href="@local(hero/well-bye.jpg)" />

<x-card.concept.staticon type="Skill" x="530" />
<text y="80" filter="url(#solid)">   
    <x-card.smallrule>May not be used if the Monster is under any Bane.</x-card.smallrule>
    <x-card.normalrule>Shuffle the Monster and all cards</x-card.normalrule>
    <x-card.normalrule>attached to it back into your Library.</x-card.normalrule>
    <x-card.smallrule>This counts as Knocking Out the Monster.</x-card.smallrule>
</text>

</x-card>