This folder contains traits that define the `__toString` magic method.

Any class that implements `__toString` can and should implement `\Stringable`.

https://www.php.net/manual/en/class.stringable

```php
/**
* Returns a representation of this object as a string.
* @group magic
* @group magic-tostring-signature
* @group nonary
* @return string
*/
public function __toString(): string
{
return STRING;
}
```
