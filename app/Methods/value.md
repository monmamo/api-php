DEPRECATED. I abandoned the value method because it was too generic and causing recursion issues repeatedly.

Implementation of `\App\Interfaces\Properties\Value::value`.

Should return `\App\Options\ThrowingOption` if there is no value to return and null is not a valid value for the object. The exception carries a stacktrace that can be examined for debugging. Should throw an exception ONLY in cases of an actual error or unanticipated situation.

The value returned by this method SHOULD NOT implement `\App\Interfaces\Properties\Value`. Many value resolvers check for implementation of `\App\Interfaces\Properties\Value` and call `\App\Interfaces\Properties\Value::value`. So if the result of this function 

# Associated traits

* `\App\Properties\Value`
* `\App\States\NullValue`
* `\App\Methods\Value\ValueFromAsString`

# Implementation template

```php
use App\Interfaces\Properties\Value as ValueProperty;
use App\ExceptionMessageGenerator;
use App\Exceptions\SingleValueException;

/**
* The value represented by this object.
* @group nonary
* @group accessor
* @implements \App\Interfaces\Properties\Value::value
* @return mixed
*/
function value(){

if (VALUE_VARIABLE instanceof ValueProperty)
    ExceptionMessageGenerator::consume(
        new SingleValueException(VALUE_VARIABLE, 'VALUE_VARIABLE implements ' . ValueProperty::class . ' which could result in resolution recursion')
    );
}
```

# Usage in code

Use `\\App\Casts\NormalScalar::cast` to evaluate this method instead of calling directly.

```php

try { VARIABLE = \App\Casts\NormalScalar::cast(SOURCE); } catch (\ValueError $nv) { ACTION }
```
