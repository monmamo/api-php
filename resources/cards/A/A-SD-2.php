<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Shuffle and Draw 1d6')]
#[Concept('Draw')]
#[Concept('Cost', 1)]
#[ImageCredit('Image by Faithtoken on Game-Icons.net')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.svg >
<path d="M209.955 488.202L88.713 441.582C77.405 437.242 77.07 429.495 87.923 424.294L204.8 469.236C219.824 475.013 242.03 474.156 256.574 467.276L418.096 390.676C428.11 395.112 427.96 402.494 417.426 407.474L250.43 486.668C239.447 491.863 221.302 492.57 209.953 488.202Z" class="" fill="#ffffff" fill-opacity="50%" />
<<path d="M209.955 455.832L88.713 409.21C79.09 405.52 77.41 399.36 83.81 394.4L204.8 440.917C219.824 446.693 242.03 445.837 256.574 438.957L421.967 360.524C427.822 364.941 426.347 370.884 417.425 375.104L250.432 454.297C239.449 459.493 221.304 460.2 209.955 455.831Z" class="" fill="#ffffff" fill-opacity="50%" />
<<path d="M209.955 427.518L88.713 380.892C79.089 377.202 77.411 371.042 83.811 366.079L204.801 412.602C219.825 418.372 242.031 417.516 256.575 410.642L421.968 332.204C427.823 336.62 426.348 342.564 417.426 346.784L250.433 425.984C239.45 431.178 221.305 431.879 209.956 427.517Z" class="" fill="#ffffff" fill-opacity="50%" />
<<path d="M209.955 399.198L88.713 352.572C79.089 348.882 77.411 342.722 83.811 337.76L204.801 384.284C219.825 390.06 242.031 389.204 256.575 382.324L421.968 303.884C427.823 308.308 426.348 314.252 417.426 318.47L250.433 397.664C239.45 402.86 221.305 403.561 209.956 399.198Z" class="" fill="#ffffff" fill-opacity="50%" />
<<path d="M209.955 370.878L88.713 324.26C77.363 319.905 77.07 312.11 88.053 306.907L175.289 265.531L210.115 283.854C225.48 291.944 248.052 290.914 262.615 281.464L328.355 238.792L416.759 272.799C428.103 277.156 428.409 284.959 417.424 290.153L250.431 369.348C239.448 374.543 221.303 375.25 209.954 370.882Z" class="" fill="#ffffff" fill-opacity="50%" />
<<path d="M216.805 271.148L93.44 206.22C82.673 200.55 82.223 190.573 92.422 183.952L197.532 115.724L223.377 115.724L223.392 180.686L282.056 180.686L282.056 115.724L332.2 115.724L304.713 74.334L423.623 136.918C434.386 142.588 434.835 152.564 424.636 159.186L254.803 269.418C244.603 276.038 227.573 276.818 216.806 271.148Z" class="" fill="#ffffff" fill-opacity="50%" />
<<path d="M238.442 165.625L238.442 100.67L203.597 100.67L252.727 20.93L301.847 100.67L267 100.67L267 165.625L238.442 165.625Z" class="selected" fill="#ffffff" fill-opacity="1" />
    </x-card.hero.svg >
    <text >
    <tspan x="50%" y="440" font-family="Roboto" text-anchor="middle"  font-size="265" font-weight="700" fill="white" >1d6</tspan>
    </text>


    <x-card.phaserule type="Draw" ><text>
<x-card.ruleline>Shuffle your hand into your Library.</x-card.ruleline>
<x-card.ruleline>Then draw 1d6 cards.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
    </text></x-card.phaserule>
HTML;
    }
};
