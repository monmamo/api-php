Do not throw missing-index errors from `__isset`. If `__get` is unimplemented (throws exception), define `__isset` as `return false;`

See:
* https://www.php.net/manual/en/language.oop5.overloading.php#object.isset

```php
/**
* Triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties.
* @group unary
* @group magic
* @param string $property_name Name of the property being called.
* @return boolean
*/
public __isset(string $name): bool {
    
}

```
