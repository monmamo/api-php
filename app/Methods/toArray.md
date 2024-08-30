```php
/**
 * @group nonary
 * @group accessor
 * @group multivalue
 * @group associative|sequential
 */
public function toArray(): array
{
    return TODO
}
```

```php
/**
 * Converts and returns this collection or object as an array.
    * @group accessor
    * @group reductive
    * @group nonary
    * @uses \get_object_vars
    * @uses \is_array (native) Returns whether a variable is an array.
    * @uses \is_object (native) Returns whether a variable is an object.
    * @uses \is_scalar (native) Returns whether a variable is a scalar value.
    * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
    * @uses \method_exists (native) Returns whether the class method exists.
    * @uses self::toArray
    * @return mixed[]
    * @throws \App\Exceptions\ResolutionException if unable to return an array
    */
function asArray(): array
{
    if (app( \App\Constraints\IsNothing::class)->evaluate($this,'',true))
        return [];

    if (is_array($INNER_VALUE))
        return $INNER_VALUE;

    if (method_exists($INNER_VALUE, 'toArray'))
        return $INNER_VALUE->asArray();

    if ($INNER_VALUE instanceof \Traversable)
        return iterator_to_array($INNER_VALUE);

    if (is_scalar($INNER_VALUE))
        return [$INNER_VALUE];

    if (is_object($INNER_VALUE)) {
        return get_object_vars($INNER_VALUE);
    }

    throw new ResolutionException($this, DATATYPE_ARRAY);
}

/**
 * @access private
 * @var mixed
 */
private array $_keys;

/**
 * Yields the keys of the object.
 * (Order is not significant.)
 * @see https://www.php.net/manual/en/function.array-keys
 * @see https://www.php.net/manual/en/ds-map.keys.php
 * @group accessor
 * @group multivalue
 * @group nonary
 * @group unsorted
 * @implements \App\Interfaces\Predicates\Associative::keys
 * @return \App\Interfaces\Predicates\Collective
 */
function keys(): Collective
{
    $INNER_VALUE = method_exists($this, 'getInnerValue') ? $this->getInnerValue() : null;

    return $this->_keys ??= new class($this, $INNER_VALUE) extends Vector
    {
        /**
         * Constructor.
          * @group binary
            * @group magic
            * @param mixed $outer_value
            * @param mixed $INNER_VALUE
            * @return void
            * @throws \App\Exceptions\ResolutionException
            */
        function __construct($outer_value, $INNER_VALUE)
        {
            self::warn(true);

            $this->setInnerSequence(
                /**
                 * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
                 * @uses \method_exists (native) Returns whether the class method exists.
                * @uses \array_keys (native) Returns all keys of an array.
                 */
                function () use ($outer_value, $INNER_VALUE): array {
    if (app( \App\Constraints\IsNothing::class)->evaluate($outer_value,'',true))
                    return [];

                if ($outer_value instanceof \Traversable) {
                    return array_keys(iterator_to_array($outer_value));
                }

                if (method_exists($INNER_VALUE, 'keys')) {
                    return $INNER_VALUE->keys();
                }

                if (method_exists($outer_value, 'toArray')) {
                    return array_keys($outer_value->asArray());
                }

                throw new ResolutionException(compact('outer_value', 'INNER_VALUE'), 'array of keys');
            });
        }
    };
}

/**
 * @access private
 * @var mixed
 */
private array $_values;

/**
 * Yields the values of the object as a set.
 * (Order is significant.)
 * @see https://www.php.net/manual/en/function.array-values
 * @see https://www.php.net/manual/en/ds-map.values.php
* @implements \App\Interfaces\Predicates\Associative::values
* @implements \App\Interfaces\Option::values
 * @uses \method_exists (native) Returns whether the class method exists.
* @uses self::getInnerValue
* @return \App\Interfaces\Predicates\Sequential
*/
function values(): Sequential
{
    return $this->_keys ??= new class($this, $this->callOptionalMethod('getInnerValue')) extends Vector
    {
        /**
         * Constructor.
                         * @group binary
            * @group magic
            * @param mixed $outer_value
            * @param mixed $INNER_VALUE
            * @return void
            * @throws \App\Exceptions\ResolutionException
            */
        function __construct($outer_value, $INNER_VALUE)
        {
            self::warn(true);

            $this->setInnerSequence(
                /**
                 * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
                 * @uses \method_exists (native) Returns whether the class method exists.
                * @uses \array_values (native) Returns all the values from the array and indexes the array numerically.
                 */
                function () use ($outer_value, $INNER_VALUE): array {
    if (app( \App\Constraints\IsNothing::class)->evaluate($outer_value,'',true))
                        return [];

                    if ($outer_value instanceof \Traversable) {
                        return array_values(iterator_to_array($outer_value));
                    }

                    if (method_exists($INNER_VALUE, 'values')) {
                        return $INNER_VALUE->values();
                    }

                    if (method_exists($outer_value, 'toArray')) {
                        return array_values($outer_value->asArray());
                    }
                    throw new ResolutionException(compact('outer_value', 'INNER_VALUE'), 'array of values');
                }
            );
        }
    };
}
```
