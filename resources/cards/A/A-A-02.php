<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Deathgrip')]
    #[Concept('Attack')]
    #[Concept('Physical')]
    #[Concept('Level', 40)]
    #[Concept('Cost', 5)]
        #[ImageCredit('Icon by iconixar from the Noun Project')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.svg viewBox="0 0 512 640"><g fill="#ffffff"><path d="M320,48c0-4.411-3.589-8-8-8h-8v24c5.826,0,11.289,1.573,16,4.305V48z"/><path d="M304,256c8.822,0,16-7.178,16-16s-7.178-16-16-16h-72h-8c-4.418,0-8-3.582-8-8s3.582-8,8-8h8h72c8.822,0,16-7.178,16-16  s-7.178-16-16-16h-80c-4.418,0-8-3.582-8-8s3.582-8,8-8h80c8.822,0,16-7.178,16-16s-7.178-16-16-16h-80c-4.418,0-8-3.582-8-8  s3.582-8,8-8h80c8.822,0,16-7.178,16-16s-7.178-16-16-16h-94.529c-8.205,0-15.752,4.12-20.188,11.021L128,186.35v157.006  l72.093-57.675C201.287,269.116,215.136,256,232,256H304z"/><rect x="256" y="464" width="32" height="16"/><rect x="256" y="32" width="32" height="32"/><path d="M360,272H232c-8.822,0-16,7.178-16,16s7.178,16,16,16h80c4.418,0,8,3.582,8,8s-3.582,8-8,8h-80c-8.822,0-16,7.178-16,16  s7.178,16,16,16h80c4.418,0,8,3.582,8,8s-3.582,8-8,8h-80c-8.822,0-16,7.178-16,16s7.178,16,16,16h80c4.418,0,8,3.582,8,8  s-3.582,8-8,8h-80c-8.822,0-16,7.178-16,16s7.178,16,16,16h64c4.418,0,8,3.582,8,8v24h80V296C384,282.767,373.233,272,360,272z"/></g></x-card.hero.svg>

        <x-card.phaserule type="Resolution" >
<text>
<x-card.ruleline>Does 2×Boost @damage.</x-card.ruleline>
<x-card.ruleline>The Defending Monster</x-card.ruleline>
<x-card.ruleline>cannot use a Physical defense.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
