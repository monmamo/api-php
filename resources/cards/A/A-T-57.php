<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Belches Loudly')]
    #[Concept('Trait')]
    #[Concept('Size', '+1')]
    #[Concept('Cost', 3)]
    #[ImageCredit('Icon by Lorc on Game-Icons.net')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.svg>
<path d="M256.813 34.094C224.143 34.094 193.987 53.718 171.438 87.219C148.888 120.719 134.594 167.777 134.594 219.905C134.594 272.033 148.888 319.092 171.438 352.593C193.988 386.093 224.143 405.718 256.813 405.718C289.483 405.718 319.638 386.092 342.188 352.592C364.738 319.092 379.063 272.032 379.063 219.904C379.063 167.776 364.737 120.717 342.188 87.217C319.638 53.715 289.482 34.091 256.813 34.091Z" fill="#808080" fill-opacity="1" />
<path d="M64.405 127.47C26.542 182.658 12.175 253.02 30.843 322.688C54.659 411.578 125.865 474.81 210.093 492.938C145.894 460.577 90.12 390.486 65.874 300C49.537 239.025 50.266 178.672 64.406 127.47Z" class="" fill="#fff" fill-opacity="0.50" />
<path d="M449.218 127.47C463.358 178.672 464.054 239.025 447.718 300C423.472 390.486 367.73 460.578 303.528 492.938C387.758 474.81 458.931 411.578 482.748 322.688C501.416 253.02 487.08 182.658 449.218 127.468Z" class="" fill="#fff" fill-opacity="0.50" />
<path d="M118.5 167.78C90.912 207.992 80.46 259.27 94.062 310.03C111.417 374.797 163.287 420.853 224.656 434.063C177.88 410.485 137.26 359.43 119.594 293.5C107.689 249.072 108.197 205.09 118.5 167.78Z" class="" fill="#303030" fill-opacity="0.50" />
<path d="M395.094 167.78C405.397 205.09 405.904 249.072 394 293.5C376.334 359.43 335.715 410.485 288.937 434.063C350.307 420.853 402.177 374.797 419.531 310.031C433.134 259.271 422.683 207.993 395.095 167.781Z" class="" fill="#303030" fill-opacity="0.50" />
<path d="M197.281 169.875C217.346 169.675 236.141 178.465 249.281 195.188L234.563 206.718C218.543 186.334 195.746 181.754 169.938 196.406L160.72 180.156C172.74 173.332 185.243 169.996 197.28 169.876Z" class="" fill="#fff" fill-opacity="1" />
<path d="M314.438 170.405C315.063 170.395 315.688 170.4 316.313 170.405C328.353 170.527 340.856 173.895 352.876 180.719L343.656 196.969C317.85 182.316 295.053 186.866 279.032 207.249L264.346 195.719C277.076 179.519 295.086 170.754 314.44 170.405Z" class="" fill="#fff" fill-opacity="1" />
<path d="M256.813 237.095C299.009 237.095 333.188 271.305 333.188 313.5C333.188 355.693 299.008 389.875 256.813 389.875C214.618 389.875 180.407 355.695 180.407 313.5C180.407 271.305 214.617 237.094 256.813 237.094Z" class="" fill="#000000" fill-opacity="1" />
</x-card.hero.svg>

<x-card.cardrule >
<x-card.ruleline>On encounter,</x-card.ruleline>
<x-card.ruleline>pings any present Security System.</x-card.ruleline>
<x-card.ruleline>All Characters present take 1 @damage damage.</x-card.ruleline>
</x-card.cardrule>
HTML;
        }
    };
