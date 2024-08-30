Generates any number of HtmlStyle objects for this element.

Can be omitted if the object is plain. Most inputs don't need specific styling.

💡 Bootstrap implements a lot of classes that make styles unnecessary. Check those and try to use those instead.

‼️ Only yield HtmlStyle objects.

```php
/**
* Generates any number of HtmlStyle objects for this element.
* @uses HtmlStyle::__construct
* @return \Traversable
*/
function styles(): \Traversable
```
