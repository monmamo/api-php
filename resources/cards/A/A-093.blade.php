@push('background')
{{ view('Defense.background') }}
@endpush

<x-card :$cardNumber card-name="Flee">
    <image x="0" y="0" class="hero" href="@local(hero/well-bye.jpg)" />
    
<x-card.concept.staticon type="Defense" x="530" />

<text y="80" filter="url(#solid)">   
    <x-card.normalrule>Discard this Monster</x-card.normalrule>
    <x-card.normalrule>and all cards attached to it.</x-card.normalrule>
</text>

</x-card>