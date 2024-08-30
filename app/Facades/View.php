<?php

namespace App\Facades;

use App\Slug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View as ViewClass;

class View extends \Illuminate\Support\Facades\View
{
    /**
     * Aren't using \assert here because logic may depend on actually throwing an exception.
     *
     * usage:
     * tap(VIEW_NAME,View::assertExists(...));
     *
     * @group unary
     *
     * @uses \Illuminate\Support\Facades\View::exists
     * @uses \LogicException::__construct
     *
     * @throws \LogicException
     */
    public static function assertExists(string $view_name): void
    {
        if (self::exists($view_name)) {
            return;
        }
        throw new \LogicException('missing view: ' . $view_name);
    }

    /**
     * @group variadic
     *
     * @uses \App\Facades\View::make
     * @uses \App\Facades\View::makeSlug
     * @uses \App\Options\iterate
     * @uses \App\Strings\expectationMessage
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \Illuminate\Support\Facades\View::make
     * @uses \is_array (native) Returns whether a variable is an array.
     * @uses \is_null (native) Returns whether a variable is null.
     * @uses \is_string (native) Returns whether a variable is a string.
     *
     * @throws \AssertionError
     */
    public static function make2(
        mixed $view,
        mixed $data = null,
        mixed $merge_data = null,
        ?Model $entity = null,
    ): ViewClass {
        $view_reference = self::makeSlug(...\App\Options\iterate($view));

        $data_array = match (true) {
            \is_null($data) => [],
            \is_array($data) => $data,
        };

        $merge_data_array = match (true) {
            \is_null($merge_data) => [],
            \is_array($merge_data) => $merge_data,
        };

        if ($entity instanceof Model) {
            $data_array['entity'] = $entity;
        }

        return \Illuminate\Support\Facades\View::make($view_reference, $data_array, $merge_data_array);
    }

    /**
     * @group variadic
     *
     * @uses \App\Facades\View::assertExists
     * @uses \App\Slug::of
     * @uses \App\Slug::toKebabCase
     * @uses \func_get_args (native) The arguments to this function in a sequential array.
     *
     * @return void
     */
    public static function makeSlug()
    {
        $slug = Slug::of(...\func_get_args())->toKebabCase();
        self::assertExists($slug);
        return $slug;
    }
}
