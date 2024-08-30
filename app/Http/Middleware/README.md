Middleware provide a convenient mechanism for inspecting and filtering HTTP requests entering your application. For example, Laravel includes a middleware that verifies the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to your application's login screen. However, if the user is authenticated, the middleware will allow the request to proceed further into the application.

Additional middleware can be written to perform a variety of tasks besides authentication. For example, a logging middleware might log all incoming requests to your application. There are several middleware included in the Laravel framework, including middleware for authentication and CSRF protection. All of these middleware are located in the app/Http/Middleware directory.

It's best to envision middleware as a series of "layers" HTTP requests must pass through before they hit your application. Each layer can examine the request and even reject it entirely.

Every middleware should have exactly one job and do it completely.

https://laravel.com/docs/10.x/middleware

To facilitate debugging, the trait `\App\Http\NormalizeResponse` handles the propagation of the response. Implement the method `massageRequest` and return one of the following results:

- `true` to have the middleware return the response from the next middleware.
- `false` to abort with status `400`.
- A response (instance of `Symfony\Component\HttpFoundation\Response` or something that we can convert to `Symfony\Component\HttpFoundation\Response`).
- An exception.

Template:
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Requests\SectionalRequest;

/**
 * PURPOSE OF MIDDLEWARE
 * @author AUTHOR
 */
class CLASS_NAME
{
     use \App\Http\NormalizeResponse; // implements self::handle

}
```
