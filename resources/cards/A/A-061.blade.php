@push('image-credit')
Image by freepik {{-- https://www.freepik.com/free-vector/hand-drawn-werewolf-silhouette_59740170.htm --}}
@endpush

<x-card concepts="Trait" :$cardNumber card-name="Dire Form" >
  <image x="100" y="0"  href="@local(hero/dire-form.png)" />
  <x-slot:card-rules>Size +5. Speed +3.</x-slot:card-rules>
</x-card>