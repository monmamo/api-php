The Exceptions directory contains your application's exception handler and is also a good place to place any exceptions thrown by your application. If you would like to customize how your exceptions are logged or rendered, you should modify the Handler class in this directory.

Laravel looks for a `context` method on extensions to the `\Exception` class. That gives us the ability to specify any data relevant to that exception that should be added to the exception's log entry, and eliminates the need for extensions or traits simply to propagate data about an exception situation. (Except for the trait `ValueContext` which facilitates propagating a value. )

https://laravel.com/docs/9.x/errors

NOTE We need to throw exceptions where they actually occur so that we can debug them more easily. However, in production we don't want to throw an exception and disrupt the user.

Don't add option functionality to exceptions. Use ThrowingOption instead.
