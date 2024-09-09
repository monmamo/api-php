@push('image-credit')
Image by freepik
@endpush

@push('flavor-text')
<x-card.flavor-text-line>Go, go, go team go!</x-card.flavor-text-line>
@endpush

<x-card.Bystander :$cardNumber card-name="Cheerleader" >
    <image x="0" y="0" class="hero" href="@local(A032.jpg)" source="https://www.freepik.com/free-vector/hand-drawn-cheerleader-cartoon-illustration_74884680.htm#fromView=image_search_similar&page=1&position=0&uuid=c5c5f2c3-37ff-4227-956f-33c0b507b00c"/>
<x-card.concept type="Integrity">1d4</x-card.concept>
    <x-card.concept type="Female" index="1">Female</x-card.concept>
<x-card.rulebox>
@smallrule(A player may have any number of Cheerleaders on the Battlefield.)
@normalrule(Resolution phase: Your Monster’s Attacks)
@normalrule(do an additional 1d4 damage.)
</x-card.rulebox>
</x-card.Bystander>
