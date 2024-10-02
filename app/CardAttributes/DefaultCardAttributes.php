<?php

namespace App\CardAttributes;

use App\CardNumber;
use App\Concept;
use App\GeneralAttributes\Title;

#[\Attribute(\Attribute::TARGET_CLASS)]
trait DefaultCardAttributes
{
    private array $_concepts;

    private array $_flavor_text_lines;

    private array $_prerequisite_lines;

    private readonly \ReflectionClass $_reflection;

    /**
     * @group nonary
     */
    private function flavorTextLines(): array
    {
        return $this->_flavor_text_lines ??= \value(function () {
            $attributes = $this->getAttributes(FlavorText::class);

            if (\count($attributes) === 0) {
                return [];
            }
            return $attributes[0]->getArguments();
        });
    }

    /**
     * @group nonary
     */
    private function prerequisiteLines(): array
    {
        return $this->_prerequisite_lines ??= \value(function () {
            $prerequisites = [];
            $attributes = $this->getAttributes(Prerequisites::class);

            if (\count($attributes) > 0) {
                $prerequisites = $attributes[0]->getArguments();
            }

            foreach ($this->concepts() as $slug) {
                \array_push($prerequisites, ...Concept::make($slug)->standardRule());
            }

            return $prerequisites;
        });
    }

    protected function getAttributes(string $class): array
    {
        return $this->reflection()->getAttributes($class);
    }

    /**
     * @group nonary
     */
    protected function reflection(): \ReflectionClass
    {
        return $this->_reflection ?? new \ReflectionClass($this);
    }

    /**
     * @group nonary
     */
    public function background()
    {
        $attributes = $this->getAttributes(LocalBackgroundImage::class);

        if (\count($attributes) > 0) {
            return \App\Strings\html(
                'image',
                ['x' => 0, 'y' => 0,  'href' => \App\Card\localHeroUri($attributes[0]->getArguments()[0])],
            );
        }

        return \view($this->concepts()[0] . '.background');
    }

    /**
     * @group nonary
     */
    public function cardNumber(): string
    {
        $attributes = $this->reflection()->getAttributes(CardFilePath::class);
        return CardNumber::make($attributes[0]->getArguments()[0]);
    }

    /**
     * @group nonary
     */
    public function concepts(): array
    {
        return $this->_concepts ??= \value(function () {
            $attributes = $this->getAttributes(Concepts::class);

            if (isset($attributes)) {
                return $attributes[0]->getArguments();
            }
            return [];
        });
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
        $attributes = $this->getAttributes(CreditColor::class);

        if (\count($attributes) > 0) {
            return $attributes[0]->getArguments()[0];
        }

        return 'white';
    }

    /**
     * @group nonary
     */
    public function flavorText(): \Traversable
    {
        yield from $this->flavorTextLines();
    }

    /**
     * @group nonary
     */
    public function flavorTextColor(): string
    {
        $attributes = $this->getAttributes(FlavorTextColor::class);

        if (\count($attributes) > 0) {
            return $attributes[0]->getArguments()[0];
        }

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
        $attributes = $this->getAttributes(SvgHeroImage::class);

        if (\count($attributes) > 0) {
            return \App\Strings\html(
                'svg',
                ['class' => 'svg-hero'],
                $attributes[0]->getArguments()[0],
            );
        }

        $attributes = $this->getAttributes(LocalHeroImage::class);

        if (\count($attributes) > 0) {
            return \App\Strings\html(
                'image',
                ['x' => 0, 'y' => 0, 'class' => 'hero', 'href' => \App\Card\localHeroUri($attributes[0]->getArguments()[0])],
            );
        }

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
        yield from $this->prerequisiteLines();
    }

    /**
     * @group nonary
     */
    public function prerequisiteY(): int
    {
        $attributes = $this->getAttributes(PrerequisiteY::class);

        if (\count($attributes) > 0) {
            return $attributes[0]->getArguments()[0];
        }

        return 475 + 25 * \max(\count($this->flavorTextLines()), 1);
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
