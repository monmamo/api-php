@push('background')
{{ view('Catastrophe.background') }}
<x-card.image-credit>
<x-card.normalrule>Generated with StarryAI. Placeholder image.</x-card.normalrule>
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Cruel Order">
    <image x="0" y="0" class="hero" href="@local(A066.jpeg)" />
    
        <x-card.concept.staticon type="Catastrophe" x="530" />
        <text>
<x-card.normalrule>Discard the highest-level Monster</x-card.normalrule>
<x-card.normalrule>of each opponent</x-card.normalrule>
<x-card.normalrule>and all cards attached to that Monster.</x-card.normalrule>
    </text>

</x-card>
