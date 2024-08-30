This folder contains traits that define the `__invoke` method.

Invokers should perform some sort of action, which can include the action of using this object to produce a result.

Invokers should have a no more than two arguments or be variadic.

Invokers should NOT mutate their objects.

Invokers should always be public unless there is a darn good reason to be private or protected.

Guidance:
* http://wiki.netshapers.local/index.php/Magic_Method_invoke()
* http://php.net/manual/en/language.oop5.magic.php#object.invoke

```php
/**
* Invoker.
* @group magic
* @group nonary|unary|variadic
* @return mixed
*/
function __invoke() {

}
```
