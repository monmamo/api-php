```php
<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('TITLE')]
#[\App\Concept('Draw')]
//#[ImageCredit('IMAGE_CREDIT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
       yield <<<'HTML'
<x-card.flavortext>FLAVOR_TEXT</x-card.flavortext>
HTML;
    }
};
```
