Classes implementing [\Countable](https://www.php.net/manual/en/class.countable) can be used with the `count` and `is_countable` function.

```php
/**
* Returns the number of the elements or items the object would produce from iteration.
* @implements \Countable::count
* @group reductive
* @group nonary
* @return integer The number of elements or items the object would produce from iteration.
*/
public function count(): int { return VALUE; }
```
