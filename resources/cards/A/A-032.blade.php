<x-card.image-credit>
Image by freepik
</x-card.image-credit>
@endpush

<x-card.flavortext>
<x-card.flavortext.line>Go, go, go team go!</x-card.flavortext.line>
</x-card.flavortext>

@push('background')
{{ view('Bystander.background') }}
@endpush

<x-card :$cardNumber card-name="Cheerleader" >

    <image x="0" y="0" class="hero" href="@local(A032.jpg)" source="https://www.freepik.com/free-vector/hand-drawn-cheerleader-cartoon-illustration_74884680.htm#fromView=image_search_similar&page=1&position=0&uuid=c5c5f2c3-37ff-4227-956f-33c0b507b00c"/>

<x-card.rulebox>
    <x-card.concept-card type="Bystander"/>
    <x-card.concept.row>
    <x-card.concept.card type="Female" x="0" width="190" />
    <x-card.concept.card type="Cumulative" x="190" width="190" />
    <x-card.concept.card type="Integrity" x="380" width="230" >1d4</x-card.concept>
    </x-card.concept.row>
    <text y="80" filter="url(#solid)">
        <x-card.smallrule>A player may have any number of Cheerleaders on the Battlefield.</x-card.smallrule>
    </text>

        <x-card.phaserule type="Resolution" y="135" height="135">
            <text >
        <x-card.normalrule>Your Monster’s Attacks</x-card.normalrule>
            <x-card.normalrule>do an additional 1d4 damage.</x-card.normalrule>
        </text>
    </x-card.phaserule>
    
    
</x-card.rulebox>
</x-card>
