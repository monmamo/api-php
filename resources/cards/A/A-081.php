
<?php
// https://www.freepik.com/free-vector/recycle-colorful-geometric-gradient-logo-vector_27230675.htm

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Recycle')]
#[Concepts('Draw')]
#[ImageCredit('Image by logturnal on Freepik')]
#[FlavorText('Recycle today for a better upkeep phase tomorrow.')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A212.jpg)" />

      <text y="70" filter="url(#solid)">
        <x-card.normalrule>Put a card from your Discard</x-card.normalrule>
            <x-card.normalrule>pile into your hand.</x-card.normalrule>
      </text>
HTML;
    }
};
