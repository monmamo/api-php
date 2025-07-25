<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Tackling')]
#[Concept('Trait')]
#[Concept('Physical')]
#[Concept('Cost', 3)]
#[ImageCredit('Icon by M. Oki Orlando via The Noun Project')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        // icon is 28 => 650x450
        yield <<<'HTML'
<x-card.hero.svg viewBox="0 0 32 32"><g fill="#ffffff" fill-opacity="1"><path d="M2.9995,30c-0.1387,0-0.2793-0-0.4131-0.0898c-0.5029-0.2285-0.7251-0.8213-0.4966-1.3237l5-11   c0.165-0.3647,0.5308-0.6074,0.9331-0.5859c0.4004,0,0.7568,0.2563,0.9058,0.6279l2,5   c0.106,0.2656,0,0.5635-0,0.8188l-3,6c-0.2471,0.4932-0.8472,0.6953-1.3418,0.4473   c-0.4941-0.2471-0.6943-0.8477-0.4473-1.3418l2.7993-5.5981l-0.9634-2.4087l-4,8.8677C3.7427,29.7822,3.3794,30,2.9995,30z"/><path d="M14,8c-1.6543,0-3-1.3457-3-3s1.3457-3,3-3s3,1.3457,3,3S15.6543,8,14,8z M14,4c-0.5513,0-1,0.4487-1,1s0.4487,1,1,1   s1-0.4487,1-1S14.5513,4,14,4z"/><path d="M27,11c-1.6543,0-3-1.3457-3-3s1.3457-3,3-3s3,1.3457,3,3S28.6543,11,27,11z M27,7c-0.5513,0-1,0.4487-1,1s0.4487,1,1,1   s1-0.4487,1-1S27.5513,7,27,7z"/><path d="M7.999,19c-0.1641,0-0.3311-0-0.4849-0.126c-0.4824-0.2681-0.6567-0.877-0.3882-1.3599l5-9   c0.2681-0.4819,0.8774-0.6567,1.3599-0.3882c0.4824,0.2681,0.6567,0.877,0.3882,1.3599l-5,9C8.6914,18.8145,8.3506,19,7.999,19z"/><path d="M7,15c-0,0-0.1621-0-0.2437-0.0298c-0.5356-0.1338-0.8613-0.6768-0.7275-1.2129l1-4   c0-0.375,0.395-0.6621,0.7739-0.7378l5-1c0.5444-0.106,1,0.2427,1.1768,0.7842   c0.1084,0.5415-0.2427,1-0.7842,1.1768l-4.3794,0.876l-0.8467,3.3862C7.8564,14.6968,7.4487,15,7,15z"/><path d="M16,16c-0.2559,0-0.5117-0-0.707-0.293l-2-2c-0.1284-0.1279-0.2192-0.2886-0.2632-0.4644l-1-4   c-0.1338-0.5361,0.1919-1,0.7275-1.2129c0.5342-0.1333,1,0.1919,1.2129,0.7275l0.9326,3.7314l1.8042,1.8042   c0.3906,0.3906,0.3906,1,0,1.4141C16.5117,15.9023,16.2559,16,16,16z"/><path d="M16,30c-0.2559,0-0.5117-0-0.707-0.293c-0.3906-0.3906-0.3906-1,0-1.4141l3.7734-3.7734l0.5176-3.106   l-7.9595,6.3672c-0.4307,0.3452-1,0.2754-1.4053-0.1563c-0.3452-0.4312-0.2754-1,0.1563-1.4053l10-8   c0.3232-0.2593,0.7744-0.291,1.1304-0.0815c0.3574,0.2095,0.5488,0.6182,0.4805,1.0269l-1,6   c-0,0.2056-0.1318,0.395-0.2793,0.5425l-4,4C16.5117,29.9023,16.2559,30,16,30z"/><path d="M20.999,20c-0.2012,0-0.4043-0-0.5801-0.186c-0.4497-0.3213-0.5537-0.9458-0.2329-1.395l5-7   c0.3213-0.4502,0.9458-0.5542,1.395-0.2329c0.4497,0.3213,0.5537,0.9458,0.2329,1.395l-5,7C21.6187,19.8545,21.311,20,20.999,20z"/><path d="M26,13c-0,0-0-0-0.1431-0.0103l-7-1c-0.5464-0-0.9263-0.5845-0.8481-1.1313   s0.5815-0.9268,1.1313-0.8481l7,1c0.5464,0,0.9263,0.5845,0.8481,1.1313C26.9185,12.6401,26.4907,13,26,13z"/><path d="M26,18c-0.3232,0-0.6401-0.1563-0.833-0.4453c-0.3062-0.4595-0.1821-1,0.2773-1.3867l1.9849-1.3232L25.293,12.707   c-0.3906-0.3906-0.3906-1,0-1.4141s1-0.3906,1.4141,0l3,3c0.2119,0.2119,0.3174,0.5073,0.2881,0.8057   c-0,0.2979-0.1909,0.5674-0.4404,0.7334l-3,2C26.3843,17.9458,26.1914,18,26,18z" /></g></x-card.hero.svg>

  <x-card.phaserule type="Resolution" >
        <text >
        <x-card.ruleline>When this Monster uses Pounce or</x-card.ruleline>
<x-card.ruleline>a Physical attack, the attack does</x-card.ruleline>
<x-card.ruleline>an additional Speed damage to the</x-card.ruleline>
<x-card.ruleline>defending Monster. After that damage is</x-card.ruleline>
<x-card.ruleline>resolved, this Monster takes Speed damage.</x-card.ruleline>
    </text ></x-card.phaserule>
HTML;
    }
};
