@push('flavor-text')
<x-card.flavor-text-line>Who says money can't buy popularity?</x-card.flavor-text-line>
@endpush

@push('image-credit')
Image by wirestock on Freepik
@endpush


<x-card.Draw :$cardNumber card-name="Make It Rain">
    <image x="0" y="0" class="hero" href="@local(A-002.jpg)" source="https://www.freepik.com/free-photo/throwing-money-air-being-happy_10978858.htm" />
        <x-slot:card-rules>
    Every player may draw up to 5 cards.
    </x-slot:card-rules>
    
</x-card.Draw>
