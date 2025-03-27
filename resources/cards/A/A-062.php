<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Delivery Service')]
#[Concept('Vendor')]
#[ImageCredit('Icon by Cuan Studio from Noun Project')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.hero-svg viewBox="-5.0 -10.0 110.0 135.0"><g fill="#ffffff" fill-opacity="1"><path d="m20.277 6.5312c-2.4141 0-5.2109-0.10547-7.3008 1.1016-4.2539 2.457-6.875 6.9961-6.875 11.906h0.003907v0.003907c0 1.8906 1.5391 3.4219 3.4297 3.4258h34.391c1.8867-0 3.418-1.5352 3.4219-3.4258 0-1.8984-1.5234-3.4453-3.4219-3.4492h-10.762l-3.8945-8.4609c-2-1.207-6.5781-1.1016-8.9922-1.1016zm-13.215 17.312c-0.14062 0.75391-0.21094 1.5195-0.21875 2.2852 0 3.5547 1.4102 6.9609 3.9219 9.4766 2.5156 2.5117 5.9219 3.9258 9.4766 3.9258 3.5547 0 6.9609-1.4141 9.4766-3.9258 2.5117-2.5156 3.9258-5.9219 3.9258-9.4766-0-0.51953-0-1-0-1.5586h-24.008c-0.87891 0-1.7305-0.27344-2.4766-0.72656zm39.848 3.9883c-0.55078 0-1 0.21875-1.4688 0.60938-0.39062 0.38672-0.60938 0.91797-0.60938 1.4688v29.152c0.90234 1 1.7891 2.1406 2.6445 3 0.50781 0.54688 1 1 1.5117 1.5078v-31.648h16.152v17.926l4.1523-4.1523 4.1523 4.1523v-17.926h16.156v35.93h-9.6016c-0.35547 0.50391-0.76953 0.96875-1.2422 1.3594-1.1094 0.91797-2.2539 1.8594-3.418 2.793h16.336c0.55078 0 1-0.21875 1.4688-0.60547 0.39062-0.39063 0.60938-0.91797 0.60938-1.4688v-40.082c0-0.55078-0.21875-1-0.60938-1.4688-0.39062-0.39062-0.91797-0.60938-1.4688-0.60938zm-32 17.098c-1.2109-0-2.3711 0.47656-3.2266 1.3359-0.85547 0.85547-1.3359 2-1.3359 3.2266v42.172h28.715v-20.938c3.6719 3.8984 7.6094 7.25 12.695 8.4922 5.2578 1.2812 10.25-0.38672 14.438-2.7461 4.1836-2.3594 7.9453-5.5117 11.539-8.4883 1-0.87891 1.7344-2.1406 1.8633-3.5117 0.12891-1.375-0.29297-2.7383-1.1719-3.8008s-2.1406-1.7305-3.5117-1.8594-2.7383 0.28906-3.8008 1.168c-3.5977 2.9805-7 5.7734-10 7.4531-2.9727 1.6758-5 2.1367-6.8828 1.6992s-4.7578-2.4648-7.9219-5.8711c-2.8438-3-5.8594-7-8.9453-11.258-2.4023-4.3594-6.9844-7-11.961-7.0742z"/></g></x-card.hero-svg>

        <x-card.phaserule type="Draw" lines="3">
<text>
<x-card.normalrule>Search your Library for an Item card.</x-card.normalrule>
<x-card.normalrule>Reveal it. Then put it in your hand.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</text>
</x-card.phaserule>
HTML;
    }
};
