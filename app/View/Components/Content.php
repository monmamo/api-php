<?php

namespace App\View\Components;

use App\Contracts\OperatesOnEntity;
use App\Contracts\Plucks;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

/**
 * I don't know whether this is really necessary. If there's a Laravel class that does the same thing, use that instead.
 */
class Content extends Component
{
    private array $_pieces;

    /**
     * Constructor. Creates a new instance of this component.
     *
     * 💢 Laravel requires the constructor to contain the public properties, otherwise they won't be recognized.
     *
     * @group magic
     * @group mutator
     * @group unary
     *
     * @return void
     */
    public function __construct(...$pieces)
    {
        $this->_pieces = $pieces;
    }

    /**
     * @group factory
     * @group variadic
     */
    public static function generator(...$generators): \Closure
    {
        return
            /**
             * @uses \App\View\Components\Content::__construct
             * @uses \array_map (native) Applies the callback to the elements of the given arrays.
             */
            function ($row) use ($generators): self {
                $content = \array_map(
                    /**
                     * @group variadic
                     *
                     * @uses \App\Contracts\OperatesOnEntity::withEntity
                     * @uses \App\Contracts\Plucks::pluck
                     * @uses \App\Dumping\dumpIfException
                     * @uses \get_debug_type (native) Returns the type of a variable, with special handling for objects.
                     * @uses \is_callable (native) Returns whether a variable can be called as a function.
                     * @uses \UnhandledMatchError::__construct
                     * @uses \value (Laravel) If given a Closure, evaluates it; otherwise returns the value given.
                     */
                    function (mixed $content_generator) use ($row) {
                        return \App\Dumping\dumpIfException(
                            $content_generator,
                            fn () => match (true) {
                                $content_generator instanceof Plucks => $content_generator->pluck($row),
                                $content_generator instanceof OperatesOnEntity => \value(
                                    /**
                                     * @group nonary
                                     *
                                     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
                                     */
                                    function () use ($content_generator, $row) {
                                        \assert(
                                            $row instanceof Model,
                                            '$row must be an instance of ' . Model::class,
                                        );
                                        // context_to_dump: compact('row'),
                                        return $content_generator->withEntity($row);
                                    },
                                ),
                                \is_callable($content_generator) => $content_generator($row),
                            },
                        );
                    },
                    $generators,
                );
                return new self(...$content);
            };
    }

    /**
     * Returns the view or contents that represent the component.
     *
     * @implements \Illuminate\View\Component::render
     * @group nonary
     *
     * @uses \App\Strings\render
     * @uses \array_map (native) Applies the callback to the elements of the given arrays.
     * @uses \implode (native) Joins array elements with a string.
     *
     * @return \Closure|\Illuminate\Contracts\Support\Htmlable|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return \implode(\PHP_EOL, \array_map(\App\Strings\render(...), $this->_pieces));
    }
}
