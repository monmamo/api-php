❗ TypeIndicator is arguably not as necessary in a system that uses Spatie Ignition for debugging. Spatie Ignition provides the sort of type indication that this function provides. In places where this function is used, consider restructuring the code to dump the variable to the error handler.

To dump the value, use the following code:
```php
new class($value,$expectation) extends TypeIndicator {
    public function __construct(mixed $value, mixed $expectation = null)
    {
        dump($value);
        parent::__construct($value, $expectation);
    }
}
```
