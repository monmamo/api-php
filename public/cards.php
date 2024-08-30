<?php

use App\Applications\CardsApplication;

\define('LARAVEL_START', \microtime(true));
require __DIR__ . '/../vendor/autoload.php';
CardsApplication::run();
