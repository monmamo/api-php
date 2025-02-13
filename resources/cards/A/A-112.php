<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://thenounproject.com/icon/hacker-7348152/

return new
#[Title('Hacker')]
#[Concept('Mobster')]
#[Concept('Integrity', 8)]
#[Concept('DamageCapacity', 10)]
#[Concept('Size', 3)]
#[Concept('Speed', 2)]
#[ImageCredit('Icon by Designing Hub from Noun Project')]
#[FlavorText(lines: ['Hacking is getting other people to do strange things.', '- Steve Wozniak'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<svg height="540" width="610" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0">
    <g fill="#ffffff" fill-opacity="1">
 <path d="m68.68 34.352c-0.29688 0-0.58594-0.082031-0.83594-0.23828-2.8984-1.8477-6.0234-3.3125-9.2969-4.3594-8.8906-2.7773-16.312-1.1094-20.973 0.78125-3.9062 1.5859-6.2109 3.4531-6.2344 3.4688h-0.003906c-0.53516 0.44141-1.3008 0.47656-1.8711 0.082032-0.57422-0.39063-0.82031-1.1172-0.60547-1.7773 6.4492-19.535 13.242-28.949 20.75-28.793 5.3125 0.10938 10.406 5.0977 15.148 14.82 2.1758 4.5234 3.9844 9.2148 5.4219 14.023 0.13281 0.47266 0.039062 0.97656-0.25781 1.3672-0.29297 0.39453-0.75781 0.62109-1.2461 0.625zm-19.605-9.1953v-0.003906c3.5312 0.007812 7.0352 0.55469 10.402 1.6172 2.2383 0.70703 4.4141 1.6055 6.5 2.6836-2.9805-8.625-9.3164-22.656-16.434-22.812h-0.10938c-3.7734 0-9.5156 4.0625-16.16 22.445h0.003906c1.0156-0.53906 2.0586-1.0234 3.125-1.4531 4.0273-1.6328 8.3281-2.4727 12.672-2.4766z"/>
 <path d="m49.508 56.223c-0.09375 0-0.1875-0.007812-0.28125-0.027344-6.4688-1.1875-12.055-5.5781-16.16-12.695l0.003906 0.003906c-1.8711-3.25-3.2969-6.7305-4.2461-10.352l-0.003907-0.003906c-0.19531-0.83984 0.32813-1.6797 1.168-1.875 0.83984-0.19922 1.6797 0.32422 1.8789 1.1641 0.042968 0.17969 4.3789 17.969 17.645 20.633 13.266-2.6797 17.602-20.453 17.645-20.637 0.19531-0.83984 1.0391-1.3633 1.8789-1.1641 0.83984 0.19531 1.3594 1.0352 1.1641 1.8789-0.94922 3.6211-2.3789 7.1016-4.2461 10.352-4.1016 7.125-9.6914 11.523-16.16 12.695-0.09375 0.015626-0.1875 0.027344-0.28516 0.027344z"/>
 <path d="m50.496 48.438h-1.9531c-2.1875-0.007812-4.3008-0.80859-5.9453-2.2539-5.5234-4.75-5.3164-14.195-4.9688-18.035 0.074219-0.85938 0.83594-1.4922 1.6953-1.4141 0.85938 0.074219 1.4922 0.83594 1.418 1.6953-0.30469 3.3594-0.53125 11.582 3.8906 15.383 1.0781 0.95703 2.4648 1.4883 3.9062 1.5h1.9531c1.3984-0.011719 2.7461-0.51953 3.8047-1.4297 4.4453-3.7109 4.2812-11.875 4.0039-15.211v-0.003906c-0.070312-0.86328 0.57031-1.6211 1.4336-1.6914 0.86328-0.070312 1.6211 0.57031 1.6914 1.4336 0.39062 4.75 0.25 13.391-5.1172 17.871-1.6211 1.3867-3.6797 2.1484-5.8125 2.1562z"/>
 <path d="m24.102 83.398c-2.1797 0-4.2422-1.0156-5.9922-2.9609-2.8438-3.1641-3.8047-7.7109-2.5195-11.883l5.3711-17.383c1.2734-4.1484 4.3516-7.5 8.3789-9.1172 1.2383-0.5 2.625-1 4.1289-1.4844 0.81641-0.25391 1.6875 0.19922 1.9492 1.0156 0.26172 0.8125-0.17969 1.6875-0.99219 1.9609-1.4297 0.46094-2.75 0.93359-3.9062 1.4062v-0.003906c-3.1523 1.2695-5.5664 3.8945-6.5625 7.1445l-5.375 17.383c-0.96094 3.125-0.25 6.5156 1.8594 8.8594 1.2891 1.4297 2.6328 2.0547 4.1016 1.8984v0.003906c0.050781-0.003906 0.10547-0.003906 0.16016 0h6.7266c0.85937 0 1.5625 0.69922 1.5625 1.5625s-0.70313 1.5625-1.5625 1.5625h-6.6406c-0.24219 0.019531-0.46484 0.035157-0.6875 0.035157z"/>
 <path d="m68.586 83.352c-0.86328 0-1.5625-0.69922-1.5625-1.5625 0-0.86328 0.69922-1.5625 1.5625-1.5625h7.7031c1.2617-0.26953 2.4102-0.92578 3.2812-1.8828 2.1094-2.3438 2.8203-5.7422 1.8594-8.8594l-5.375-17.383h-0.003907c-0.98828-3.2344-3.3828-5.8516-6.5195-7.125-1.8125-0.73437-3.6523-1.3359-4.8828-1.7109-0.82422-0.25-1.2891-1.125-1.0352-1.9492 0.25391-0.82422 1.125-1.2891 1.9492-1.0352 1.2812 0.39062 3.2148 1.0234 5.1328 1.8047 4.0117 1.6133 7.0742 4.9531 8.3438 9.0859l5.375 17.383c1.2891 4.1641 0.32031 8.7148-2.5234 11.875-1.3633 1.5078-3.1914 2.5273-5.1953 2.8906-0.085937 0.019532-0.17578 0.027344-0.26562 0.023438zm7.8438-1.5625z"/>
 <path d="m67.98 89.016h-35.961c-0.80078 0.003906-1.4766-0.60156-1.5625-1.3984l-2.3438-22.07c-0.007812-0.054687-0.007812-0.10938-0.011719-0.16406 0.003907-2.543 2.0625-4.6016 4.6055-4.6055h34.59c2.543 0.003906 4.6016 2.0625 4.6016 4.6055 0.003906 0.050782 0.003906 0.10938 0 0.16406l-2.3672 22.07c-0.082031 0.79297-0.75391 1.3945-1.5508 1.3984zm-34.555-3.125h33.152l2.1953-20.57c-0.039063-0.78906-0.6875-1.4102-1.4766-1.4102h-34.594c-0.78906 0-1.4375 0.62109-1.4766 1.4102z"/>
 <path d="m68.23 96.484h-36.461c-2.4492-0.003906-4.4375-1.9883-4.4414-4.4375v-4.5938c0-0.86328 0.70312-1.5625 1.5625-1.5625h42.219c0.41406 0 0.80859 0.16406 1.1016 0.45703 0.29297 0.29297 0.46094 0.6875 0.46094 1.1055v4.5938c-0.003906 2.4492-1.9922 4.4336-4.4414 4.4375zm-37.777-7.4688v3.0312c0.003906 0.72266 0.58984 1.3125 1.3164 1.3125h36.461c0.72656 0 1.3125-0.58984 1.3164-1.3125v-3.0312z"/>
 <path d="m50 81.406c-2.6328 0-5.0078-1.5859-6.0156-4.0156-1.0078-2.4336-0.44922-5.2344 1.4141-7.0938 1.8594-1.8633 4.6602-2.4219 7.0938-1.4141 2.4297 1.0078 4.0156 3.3828 4.0156 6.0156-0.003906 3.5938-2.9141 6.5039-6.5078 6.5078zm0-9.8945v0.003906c-1.3672 0-2.6016 0.82422-3.1289 2.0859-0.52344 1.2656-0.23438 2.7227 0.73438 3.6914s2.4258 1.2578 3.6914 0.73438c1.2617-0.52734 2.0859-1.7617 2.0859-3.1289 0-1.8672-1.5156-3.3828-3.3828-3.3867z"/>
    </g>
</svg>

        <x-card.phaserule type="Upkeep" lines="4">
            <text >
<x-card.normalrule>Look at the top 3 cards of any</x-card.normalrule> 
<x-card.normalrule>Library & choose 1 of them. Shuffle</x-card.normalrule>
<x-card.normalrule>the other cards back into the Library. Then</x-card.normalrule>
<x-card.normalrule>put the card you chose on top of the Library.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
