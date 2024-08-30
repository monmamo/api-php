`make` is the Laravel standard name for a static function that makes instances of a class.

NOTE: There are a bunch of `of` methods that do the same thing. I implemented those before I decided to follow the Laravel pattern of using `make` for these.

A use of `make` is making a closure for constructing the object. PHP currently does not support something like `new Class(...)`.
