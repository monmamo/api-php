<?php

namespace App;

use App\CardAttributes\ImageCredit;
use App\Concerns\Properties\Name;

abstract class Card implements \App\Contracts\Card\CardComponents
{
    use Name;

    private object $card_type_facade;

    /**
     * @group unary
     */
    public static function byCardNumber($card_id): static
    {
        $pieces = \explode('-', $card_id);

        return \config("cards.{$pieces[0]}.{$card_id}");
    }

    /**
     * @group nonary
     */
    public function cardType(): object
    {
        return $this->card_type_facade ??= \value(function () {
            $reflection = new \ReflectionClass($this);
            $attributes = $reflection->getAttributes(CardType::class);
            $attribute = $attributes[0] ?? throw new \LogicException();
            return $attribute->newInstance();
        });
    }

    /**
     * @group nonary
     */
    public function flavorText(): \Traversable
    {
        return new \EmptyIterator();
    }

    /**
     * @implements \App\Contracts\HasName
     */
    public function imageCredit(): ?string
    {
        $reflection = new \ReflectionClass($this);
        $attributes = $reflection->getAttributes(ImageCredit::class);

        foreach ($attributes as $attribute) {
            return 'Image by ' . $attribute->getArguments()[0];
        }

        return null;
    }

    /**
     * @group unary
     */
    public static function path(?string $card_number = null, ?string $set = null): string
    {
        $set ??= \explode('-', $card_number)[0];

        return \resource_path("cards/{$set}/{$card_number}.blade.php");
    }
}
