<?php

namespace App;

class Card extends \ArrayObject
{


    /**
     * @group unary
     */
    public function __construct(?string $card_id = null, ?string $path = null)
    {
        $path ??= self::path($card_id);

        try {
            parent::__construct(json_decode(file_get_contents($path), true));
        } catch (\Exception $e) {
            throw new \Exception("Card not found: {$path}");
        }
    }


    /**
     * @group unary
     */
    public static function path($card_id): string
    {
        $pieces = explode('-', $card_id);

        return resource_path("cards/{$pieces[0]}/{$card_id}.json");
    }
}
