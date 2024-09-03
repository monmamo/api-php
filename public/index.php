<?php

use App\Applications\RootApplication;

\define('LARAVEL_START', \microtime(true));
require __DIR__ . '/../vendor/autoload.php';
RootApplication::run();