Best practices:

* Indicate in the comment why the definition exists and what purpose it serves.
* Include a check for a private property name (beginning with an underscore).

💢 Watch out for cases where we can't declare the proper types on the arguments because a parent class doesn't declare them.

Guidance and reference:
* http://php.net/manual/en/language.oop5.overloading.php#object.call

```php
/**
* Method invoked when attempting invoke an inaccessible or undefined method of this class in a static context.
* @group magic
* @group magic-call-signature
* @group variadic
* @param string $name Name of the method being called.
* @param mixed[] $arguments Enumerated array containing the parameters passed to the method.
* @uses \is_private
* @uses UndeclaredPrivatePropertyException::__construct
* @return mixed (usually self)
*/
static function __callStatic(string $name, array $arguments)
{
assert(!is_private($name),new UndeclaredPrivatePropertyException($name));
}
```
