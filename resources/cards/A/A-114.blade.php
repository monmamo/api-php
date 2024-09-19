@push('background')
{{ view('Bystander.background') }}
<x-card.image-credit>
    Image by freepik
</x-card.image-credit>
@endpush


<x-card :$cardNumber card-name="Personal Assistant">
    
    <image x="0" y="0" class="hero" href="@local(hero/personal-assistant.jpg)" />
    <x-card.concept.staticon type="Bystander" x="{{610-64*3}}" />
    <x-card.concept.staticon type="Cumulative"   />
        <x-card.concept.staticon type="Integrity"  value="1d6" />

            <text y="500" filter="url(#solid)">
                <x-card.smallrule>A player may have any number of Personal Assistants</x-card.smallrule>
                <x-card.smallrule> on the Battlefield. You may choose to make this card Male or Female</x-card.smallrule>
                <x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
            </text>
        
            <x-card.phaserule type="Draw" height="130" badge="Repeat">
                <text>
                <x-card.normalrule>Draw a card. If you drew any cards </x-card.normalrule>
                <x-card.normalrule>in this way, discard an equal number of </x-card.normalrule>
                <x-card.normalrule>cards from your hand.</x-card.normalrule>
            </text>
        </x-card.phaserule>
</x-card>
