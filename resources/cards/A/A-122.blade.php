@push('background')
{{ view('Bystander.background') }}
<x-card.image-credit>Image by freepik</x-card.image-credit>
{{-- https://www.freepik.com/free-photo/football-trainer-teaching-his-pupils_32248887.htm --}}
@endpush

<x-card :$cardNumber card-name="Offensive Coordinator">

    <image x="0" y="0" class="hero" href="@local(A189.jpg)" />
    
            <x-card.concept.staticon type="Bystander" :dx="4" />
            <x-card.concept.staticon type="Coach" />
            <x-card.concept.staticon type="Male" />
            <x-card.concept.staticon type="Integrity" value="1d4" />
        
        <text y="500" filter="url(#solid)">
            <x-card.smallrule>Limit 1 per player on Battlefield. </x-card.smallrule>
                <x-card.smallrule>You must already have a Head Coach on the Battlefield</x-card.smallrule>
                <x-card.smallrule>to put this card on the Battlefield.</x-card.smallrule>
                <x-card.smallrule>You may choose to make this card Female</x-card.smallrule>
                <x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
                <x-card.normalrule>You may put the Attack cards you use</x-card.normalrule>
                <x-card.normalrule>at the bottom of your Library. </x-card.normalrule>
            </text>
        

</x-card>
