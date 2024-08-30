If implementing `__get` implement `__isset` as well.

Guidance:
* https://www.php.net/manual/en/language.oop5.overloading.php#object.get

```php
/**
* Reads data from inaccessible (protected or private) or non-existing properties.
* @group accessor
* @group magic
* @group selective
* @group unary
* @param string $property_name Name of the property being accessed.
* @return mixed
*/
public __get(string $name): mixed {}
```
