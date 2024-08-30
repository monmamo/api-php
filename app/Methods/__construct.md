Traits that define the `__construct` method.

If implementing a singleton, make `__construct` private.

A constructor should not take more than two arguments unless it is variadic. If a constructor needs that many arguments, the class probably needs to be refactored, with the arguments refactored into public properties.

NOTE: If this class does not have a parent or its parent(s) do not implement `__construct`, calling `parent::__construct()` will throw an exception. 

Guidance on `__construct`: 
* http://php.net/manual/en/language.oop5.decon.php
* http://wiki.netshapers.local/index.php/Magic_Method_construct()

```php
/**
* Constructor.
* @group magic
* @group mutator
* @group nonary|unary|variadic
* @uses parent::__construct
* @return void
*/
function __construct() {
}
```

