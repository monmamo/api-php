<?php

namespace App\CardAttributes;

use App\CardNumber;
use App\GeneralAttributes\Title;

#[\Attribute(\Attribute::TARGET_CLASS)]
trait DefaultCardAttributes
{
    private readonly \ReflectionClass $_reflection;

    protected function getAttributes(string $class): array
    {
        return $this->reflection()->getAttributes($class);
    }

    protected function reflection(): \ReflectionClass
    {
        return $this->_reflection ?? new \ReflectionClass($this);
    }

    /**
     * @implements \App\Contracts\HasName
     */
    public function background()
    {
        // $attributes = $this->getAttributes(\App\CardAttributes\Background::class);
        // return count($attributes) > 0 ? $attributes[0]->getArguments()[0] : null;

        return \view($this->concepts()[0] . '.background');
    }

    public function cardNumber(): string
    {
        $attributes = $this->reflection()->getAttributes(CardFilePath::class);
        return CardNumber::make($attributes[0]->getArguments()[0]);
    }

    /**
     * @implements \App\Contracts\HasName
     */
    public function concepts(): array
    {
        $attributes = $this->getAttributes(Concepts::class);

        if (\count($attributes) === 0) {
            return [];
        }
        return $attributes[0]->getArguments();
    }

    /**
     * @group nonary
     */
    public function content(): \Traversable
    {
        return new \EmptyIterator();
    }

    /**
     * @group nonary
     */
    public function creditColor(): string
    {
        return 'white';
    }

    /**
     * @group nonary
     */
    public function flavorText(): \Traversable
    {
        $attributes = $this->getAttributes(FlavorText::class);

        if (\count($attributes) === 0) {
            return;
        }
        yield from $attributes[0]->getArguments();
    }

    /**
     * @group nonary
     */
    public function flavorTextColor(): string
    {
        return 'white';
    }

    /**
     * @group nonary
     */
    public function flavorTextY(): int
    {
        return 510;
    }

    /**
     * @group nonary
     */
    public function hero(): ?string
    {
        return null;
    }

    /**
     * @implements \App\Contracts\HasName
     */
    public function imageCredit(): ?string
    {
        $attributes = $this->getAttributes(IsGeneratedImage::class);

        if (\count($attributes) > 0) {
            return 'Generated image';
        }

        $attributes = $this->getAttributes(ImageCredit::class);
        return \count($attributes) > 0 ? $attributes[0]->getArguments()[0] : null;
    }

    /**
     * @implements \App\Contracts\HasName
     */
    public function name(): string
    {
        $attributes = $this->getAttributes(Title::class);

        if (\count($attributes) > 0) {
            return $attributes[0]->getArguments()[0];
        }
    }

    /**
     * @group nonary
     */
    public function prerequisites(): \Traversable
    {
        return new \EmptyIterator();
    }

    /**
     * @implements \App\Contracts\HasName
     */
    public function set(): string
    {
        $attributes = $this->getAttributes(CardSet::class);
        return \count($attributes) > 0 ? $attributes[0]->getArguments()[0] : 'Unknown';
    }
}
