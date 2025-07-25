<?php

// Full Heal PTCG card https://bulbapedia.bulbagarden.net/wiki/Full_Heal_(Rebel_Clash_159)

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// Proposed change: Allow this card to be played instantly to remove Banes as they are attached.

return new
#[Title('Allergy Relief')]
#[Concept('Item')]
#[Concept('Healing')]
#[Concept('Cost', 2)]
#[ImageCredit('Image by Delapouite on Game-Icons.net')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.svg><g fill="#ffffff" fill-opacity="1"><path d="M256 73c-62.875 0-91.913 11.948-105.273 26.979-11.632 13.086-13.324 30.848-13.59 51.021h30.437c1.634-13.963 7.309-26.44 19.438-34.518C201.703 106.7 223.253 103 256 103c32.753 0 54.311 3.739 68.996 13.54 12.115 8.084 17.788 20.546 19.426 34.46h30.441c-.266-20.173-1.958-37.935-13.59-51.021C347.913 84.948 318.875 73 256 73zm-135 94v16h62v-16h-62zm208 0v16h62v-16h-62zM81.47 201c-13.866 0-28.232 6.837-38.97 17.412C31.762 228.988 25 243 25 256v192c0 14.5 3.485 23.754 9.37 29.633C40.253 483.51 49.53 487 64.063 487h384.387c14.253 0 23.382-3.463 29.219-9.342C483.507 471.78 487 462.5 487 448V256c0-13-6.777-27.05-17.363-37.637C459.05 207.777 445 201 432 201H81.47zM224 256h64v64h64v64h-64v64h-64v-64h-64v-64h64v-64z" /></g></x-card.hero.svg>

<x-card.phaserule type="Upkeep" ><text>
<x-card.ruleline>Remove all Banes from any one</x-card.ruleline>
<x-card.ruleline>Monster. Then discard this card.</x-card.ruleline>
</text></x-card.phaserule>
HTML;
    }

    /**
     * @group nonary
     */
    public function webpageContent(): \Traversable
    {
        yield <<<'HTML'
<h2>How to Play</h2>
<p>Play this card during your Upkeep phase. Choose one of your Monsters and remove all Banes from it. Then discard this card.</p>
HTML;
    }
};
