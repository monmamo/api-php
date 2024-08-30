<?php

namespace App;

use App\Contracts\HasTitleMethod;
use App\GeneralAttributes\InputSelector;
use App\GeneralAttributes\Selector;
use App\GeneralAttributes\SelectSelector;
use App\GeneralAttributes\TextareaSelector;
use App\Methods\Make\MakeFromConstructor;
use App\Strings\InlineText;
use App\Strings\Title;
use Illuminate\Support\Str;

/**
 * Functionality associated with referencing an enum.
 */
final class EnumReference implements \Stringable, HasTitleMethod
{
    use MakeFromConstructor;

    private readonly string $_fqn;

    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group unary
     *
     * @return void
     */
    public function __construct(private readonly \UnitEnum $enum) {}

    /**
     * Returns a representation of this object as a string.
     *
     * @group magic
     * @group magic-tostring-signature
     * @group nonary
     * @group resolving
     *
     * @uses \App\ClassReference::fullyQualifiedName
     */
    public function __toString(): string
    {
        return $this->_fqn ??= self::enumFQN($this->enum);
    }

    /**
     * Returns a representation of this object as a string.
     *
     * @group magic
     * @group magic-tostring-signature
     * @group nonary
     * @group resolving
     *
     * @uses \App\ClassReference::fullyQualifiedName
     * @uses \get_class (native) Returns the name of the class of an object.
     */
    private static function enumFQN(\UnitEnum $enum): string
    {
        return \get_class($enum) . '::' . $enum->name;
    }

    /**
     * @group unary
     *
     * @uses \App\EnumReference::getReflection
     * @uses \ReflectionClassConstant::getAttributes
     */
    protected function getAllAttributes(): array
    {
        return $this->getReflection()->getAttributes();
    }

    /**
     * @group unary
     *
     * @uses \get_class (native) Returns the name of the class of an object.
     * @uses \ReflectionClassConstant::__construct
     */
    protected function getReflection(): \ReflectionClassConstant
    {
        return new \ReflectionClassConstant(\get_class($this->enum), $this->enum->name);
    }

    /**
     * @group nonary
     *
     * @uses \App\EnumReference::getReflection
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \ReflectionClassConstant::getAttributes
     *
     * @throws \AssertionError
     */
    public function assertHasAttributes(): void
    {
        \assert(
            \count($this->getReflection()->getAttributes()) > 0,
            (string) $this . ': no attributes',
        );
    }

    /**
     * @group unary
     *
     * @uses \App\EnumReference::getReflection
     * @uses \ReflectionClassConstant::getAttributes
     */
    public function getAttributes(string $attribute_fqn): array
    {
        return $this->getReflection()->getAttributes($attribute_fqn);
    }

    /**
     * @group unary
     *
     * @uses \App\EnumReference::getAttributes
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \LogicException::__construct
     *
     * @throws \LogicException
     */
    public function getSingularAttribute(string $attribute_fqn, bool $or_throw = false): ?\ReflectionAttribute
    {
        $attributes = $this->getAttributes($attribute_fqn);

        if (\count($attributes) === 0) {
            if ($or_throw) {
                throw new \LogicException((string) $this . ': no ' . $attribute_fqn . ' attribute');
            }
            return null;
        }
        return $attributes[0];
    }

    /**
     * @group unary
     *
     * @uses \App\EnumReference::getAttributes
     * @uses \count (native) Returns the number of items in an array or Countable object.
     */
    public function hasBooleanAttribute(string $attribute_fqn): bool
    {
        $classAttributes = $this->getAttributes($attribute_fqn);
        return \count($classAttributes) > 0;
    }

    /**
     * Constructs a new slug from a sequence of pieces.
     *
     * @see app/Methods/Make/README.md
     *
     * @group caching
     * @group factory
     * @group unary
     *
     * @uses \App\EnumReference::__construct
     * @uses \App\EnumReference::enumFQN
     */
    public static function make(\UnitEnum $value): static
    {
        if ($value instanceof self) {
            return $value;
        }

        static $cache = [];
        return $cache[self::enumFQN($value)] ??= new self($value);
    }

    /**
     * Plucks a value from a value or attribute.
     *
     * @implements \App\Contracts\Plucks::pluckForAttribute
     * @group accessor
     * @group attribute-getter
     * @group variadic
     *
     * @uses \App\EnumReference::value
     * @uses \App\Offset::make
     * @uses \App\Offset::pluckForAttribute
     */
    public function pluckForAttribute(mixed $value, array $attributes): mixed
    {
        return Offset::make($this->value())->pluckProperty($value, $attributes);
    }

    /**
     * Plucks a value from a source.
     *
     * @implements \App\Contracts\Plucks::pluckOffset
     * @group unary
     *
     * @uses \App\EnumReference::value
     * @uses \App\Offset::make
     * @uses \App\Offset::pluckOffset
     */
    public function pluckOffset(mixed $source): mixed
    {
        return Offset::make($this->value())->pluckOffset($source);
    }

    /**
     * Plucks a value from a source.
     *
     * @implements \App\Contracts\Plucks::pluckProperty
     * @group unary
     *
     * @uses \App\EnumReference::value
     * @uses \App\Offset::make
     * @uses \App\Offset::pluckProperty
     */
    public function pluckProperty(mixed $source): mixed
    {
        return Offset::make($this->value())->pluckProperty($source);
    }

    /**
     * @implements \App\Contracts\HasSelector::selector
     * @group nonary
     *
     * @uses \App\EnumReference::getAttributes
     * @uses \App\EnumReference::value
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \ReflectionAttribute::newInstance
     * @uses \UnhandledMatchError::__construct
     */
    public function selector(): string
    {
        $this->assertHasAttributes();
        $enum_value = $this->value();

        $attributes = $this->getAttributes(InputSelector::class);

        if (\count($attributes) === 1) {
            return InputSelector::fromName($enum_value);
        }

        $attributes = $this->getAttributes(SelectSelector::class);

        if (\count($attributes) === 1) {
            return SelectSelector::fromName($enum_value);
        }

        $attributes = $this->getAttributes(TextareaSelector::class);

        if (\count($attributes) === 1) {
            return TextareaSelector::fromName($enum_value);
        }

        $attributes = $this->getAttributes(Selector::class);

        if (\count($attributes) === 1) {
            return $attributes[0]->newInstance()->value;
        }

        throw new \UnhandledMatchError((string) $this . ': no selector');
    }

    /**
     * Returns the title of the entity packaged in a Title object.
     *
     * @implements \App\Contracts\HasTitleMethod::title
     * @group accessor
     * @group nonary
     *
     * @uses \App\EnumReference::titleUnwrapped
     * @uses \App\Strings\InlineText::__construct
     */
    public function title(): InlineText
    {
        return new InlineText($this->titleUnwrapped());
    }

    /**
     * Returns the title of the entity packaged in a Title object.
     *
     * @implements \App\Contracts\HasTitleMethod::title
     * @group accessor
     * @group nonary
     *
     * @uses \App\Callables\run
     * @uses \App\EnumReference::value
     * @uses \App\Strings\assertStringNotEmpty
     * @uses \Illuminate\Support\Str::headline (Laravel) Converts the given string to title case for each word. ‼️ Injects a space before each uppercase character.
     */
    public function titleUnwrapped(): string
    {
        try {
            return \App\Callables\run(
                arguments_to_callable: [$this->getAttributes(Title::class)],
                callable: [
                    fn ($title_attributes): ?\ReflectionAttribute => $title_attributes[0] ?? null,
                    fn ($attribute): ?string => $attribute?->getArguments()[0] ?? null,
                    fn ($result): string => $result ?? Str::headline($this->value()),
                ],
            );
        } catch (\Throwable $exception) {
            \dump($this);
            throw $exception;
        }
    }

    /**
     * @group nonary
     */
    public function value(): string|int
    {
        return $this->enum instanceof \BackedEnum ? $this->enum->value : $this->enum->name;
    }
}
