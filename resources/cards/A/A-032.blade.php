<x-card.Bystander :$cardNumber card-name="Cheerleader" >
    <image x="0" y="0" class="hero" href="@local(A032.jpg)" source="https://www.freepik.com/free-vector/hand-drawn-cheerleader-cartoon-illustration_74884680.htm#fromView=image_search_similar&page=1&position=0&uuid=c5c5f2c3-37ff-4227-956f-33c0b507b00c"/>
    @push('image-credit')
Image by freepik
@endpush
@push('flavor-text')
<x-card.flavor-text-line>Go, go, go team go!</x-card.flavor-text-line>
@endpush
<x-card.concept type="Integrity">1d4</x-card.concern>
    <x-card.concept type="Female" index="1">Female</x-card.concern>
<x-card.rulebox>
    <x-slot:small>A player may have any number of Cheerleaders
        on the Battlefield.</x-slot:small>
    <x-slot:normal>Resolution phase: Your Monster’s Attacks
        do an additional 1d4 damage.</x-slot:normal>
</x-card.rulebox>
</x-card.Bystander>
