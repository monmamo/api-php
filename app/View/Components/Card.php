<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public readonly string $set;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public readonly string $cardNumber,
        public readonly string $name,
        public readonly string $cardTypeFqn,

    ) {
        $this->set =  explode('-', $cardNumber)[0];
    }


    /**
     * @group unary
     */
    // public function __construct(?string $card_id = null, ?string $path = null)
    // {
    //     $path ??= self::path($card_id);

    //     try {
    //         parent::__construct(json_decode(file_get_contents($path), true));
    //     } catch (\Exception $e) {
    //         throw new \Exception("Card not found: {$path}");
    //     }
    // }


}
