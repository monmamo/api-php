Method invoked when attempting invoke an inaccessible or undefined method of this class in an object context.

PHP calls `__call` when invoking inaccessible methods in an object context.

We use `__call` to implement virtual properties and methods.

💡 Always indicate what the magic method is doing, why it is being defined.

See:
* http://php.net/manual/en/language.oop5.overloading.php#object.call

```php
/**
* Method invoked when attempting invoke an inaccessible or undefined method of this class in an object context.
* @group magic
* @group magic-call-signature
* @group variadic
* @param string $name Name of the method being called.
* @param mixed[] $arguments Enumerated array containing the parameters passed to the method.
* @return mixed
*/
function __call(string $name,array $arguments)
{
    
}
```
