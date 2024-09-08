<x-card.Mobster :$cardNumber card-name="Boss">
    <g transform="scale(2.75) translate(-140,-60)">
    <path d="M257.408 22.127l-23.082 62.035-31.017-57.707-11.542 59.15-44.002-55.543L154.26 110c27.263 27.263 178.638 27.663 206.3 0l5.772-79.936-44.002 55.543-11.54-59.15-31.02 56.986-22.36-61.313h-.002z" ></path>
    </g>
<x-slot:card-rules>
    Draw Phase: You may draw 1 card
    for each Mobster you have on the Battlefield.
    Then you may take another Draw phase.
    </x-slot:card-rules>
    <text x="50%" y="-10" class="credit" text-anchor="middle" alignment-baseline="bottom">Elements of image from Game-Icons.net</text>
    @push('flavor-text')
<x-card.flavor-text-line>His way or the highway.</x-card.flavor-text-line>
@endpush
</x-card.Mobster>