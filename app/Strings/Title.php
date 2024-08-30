<?php

namespace App\Strings;

use App\Constraints\IsValidTitle;
use App\Contracts\HasTitleMethod;
use App\Contracts\HasTitleProperty;
use App\EnumReference;
use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Support\Htmlable;

/**
 * Encapsulates functionality pertaining to entity titles.
 *
 * CAUTION This is not a general-purpose stringifier. It is specifically for entity titles. Use as a general-purpose stringifier will fail for things that do not have a title property or method, such as integers and booleans.
 */
#[\Attribute(\Attribute::TARGET_ALL)]
class Title extends InlineText implements Castable, Htmlable
{
    /**
     * Constructor.
     *
     * Don't resolve to string here!
     *
     * @group binary
     * @group magic
     * @group mutator
     *
     * @uses \App\Dumping\dumpLabeled
     * @uses \App\Strings\titleUnwrapped
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     *
     * @throws \AssertionError
     */
    public function __construct(
        mixed $source_value,
    ) {
        $unwrapped_value = \App\Strings\titleUnwrapped($source_value); // dumps and throws

        try {
            \assert(
                $unwrapped_value !== '',
                'title must be a non-empty string',
            );
        } catch (\Throwable $exception) {
            \App\Dumping\dumpLabeled(\compact('source_value', 'unwrapped_value'));
            throw $exception;
        }

        parent::__construct($unwrapped_value);
    }

    /**
     * If we are get an empty string where we expect a title, there is probably something wrong somewhere.
     *
     * @extends \App\Strings\InlineText::validateString
     *
     * @uses \App\Constraints\IsValidTitle::__construct
     * @uses \App\Constraints\IsValidTitle::evaluate
     */
    protected function validateString(string $resulting_string): void
    {
        (new IsValidTitle())->evaluate($resulting_string);
    }

    /**
     * @group resolving
     * @group unary
     */
    public static function resolveArrayAccess(\ArrayAccess $entity): string
    {
        return $entity['title'];
    }

    /**
     * @group resolving
     * @group unary
     *
     * @uses \App\Callables\run
     */
    public static function resolveBackedEnum(\BackedEnum $entity): string
    {
        return (string) EnumReference::make($entity)->title();
    }

    /**
     * @group resolving
     * @group unary
     *
     * @throws \Throwable Any exception thrown by any called method.
     */
    public static function resolveHasTitleMethod(HasTitleMethod $entity): string
    {
        return $entity->title();
    }

    /**
     * @group resolving
     * @group unary
     */
    public static function resolveHasTitleProperty(HasTitleProperty $entity): string
    {
        return $entity->title;
    }

    /**
     * @group resolving
     * @group unary
     */
    public static function resolveStringable(\Stringable $entity): string
    {
        return $entity->__toString();
    }

    /**
     * @group resolving
     * @group unary
     */
    public static function resolveUnitEnum(\UnitEnum $entity): string
    {
        return EnumReference::make($entity)->titleUnwrapped();
    }
}
