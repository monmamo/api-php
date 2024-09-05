<?php

namespace App;



use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

abstract class Card
{
    use \App\Concerns\Properties\Name;

    private object $card_type_facade;

    /**
     * @group nonary
     */
    public function cardType(): object
    {
        return $this->card_type_facade ??=  value(function () {
            $reflection = new \ReflectionClass($this);
            $attributes = $reflection->getAttributes();

            foreach ($attributes as $attribute) {
                if ($attribute->getName() === \App\CardAttributes\CardType::class) {
                    return new class($attribute->getArguments()[0]) {
                        public function __construct(
                            public readonly string $fqn,
                        ) {}
                        public function __call($method, $args)
                        {
                            return call_user_func_array([$this->fqn, $method], $args);
                        }
                    };
                }
            }

            throw new \LogicException();
        });
    }

    /**
     * @group unary
     */
    public static function byCardNumber($card_id): static
    {
        $pieces = explode('-', $card_id);

        return config("cards.{$pieces[0]}.{$card_id}");
    }

        /**
     * @group nonary
     */
   abstract public function bodyText():\Traversable;




    /**
     * @group nonary
     */
    public function flavorText(): \Traversable
    {
        return new \EmptyIterator;
    }

     /**
     * @implements \App\Contracts\HasName
     */
    public function imageCredit(): ?string
    {

        $reflection = new \ReflectionClass($this);
        $attributes = $reflection->getAttributes(\App\CardAttributes\ImageCredit::class);

        foreach ($attributes as $attribute) {
                return 'Image by ' .$attribute->getArguments()[0];
        }
    }

    /**
     * @group unary
     */
    public static function path(?string $card_number = null, ?string $set = null): string
    {
        $set ??=     explode('-', $card_number)[0];

        return resource_path("cards/{$set}/{$card_number}.blade.php");
    }
}
