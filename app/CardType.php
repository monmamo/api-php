<?php

namespace App;

abstract class CardType implements \App\Contracts\HasIcon
{
use \App\Concerns\Properties\Name;

  public function __construct(protected readonly string $type) {}


  public  function background(): \Illuminate\Contracts\Support\Renderable
  {
    return view($this->type . '.background');
  }

  public  function icon(): \Illuminate\Contracts\Support\Renderable
  {
    return view($this->type . '.icon');
  }

  protected ?string $color = null;

  public  function color(): string|array
  {
    return $this->color ??=  value(function () {
      $reflection = new \ReflectionClass($this);
      $attributes = $reflection->getAttributes();

      foreach ($attributes as $attribute) {
        if ($attribute->getName() === \App\GeneralAttributes\Color::class) {
          return $attribute->getArguments()[0]->value;
        }
      }

      throw new \LogicException();
    });
  }


  abstract public static function standardRule(): \Traversable;

  
}
