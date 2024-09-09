<x-card.Vendor :$cardNumber card-name="Convenience Store" >

<x-slot:card-rules>
</x-slot:card-rules>
</x-card.Vendor>
<?php
 [
Discard 1d4 cards from your hand.
Search your Library for one Item card. 
Reveal it, then put it in your hand.
Shuffle your library.
You may perform another Draw phase action.
  ],
  <x-card.concept type="Integrity">1d6</x-card.concern>
  @push('flavor-text')
<x-card.flavor-text-line>The quick stop for all your needs.</x-card.flavor-text-line>
@endpush,
  "image": {
    <image x="0" y="0" class="hero" href="@local(A040.png)" />
    @push('image-credit')
@ai
@endpush
  }
}