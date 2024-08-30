<?php

namespace App\Enums;

use Illuminate\Container\Container;

/**
 * Dependency names.
 *
 * Ours unless noted otherwise:
 * [L] = Laravel.
 *
 *
 */
enum Dependencies: string
{
    case Cache = 'cache';
    case Events = 'events'; // [L]
    case Filter = 'filter';
    case Format = 'format';
    case Hash = 'hash'; // [L]
    case Name = 'name';
    case Order = 'order';
    case Priority = 'priority';
    case Request = 'request'; // [L]
    case Scope = 'scope';
    case Search = 'search';

    /**
     *
     * @group unary
     *
     * @uses \Illuminate\Container\Container::getInstance
     * @uses \Illuminate\Container\Container::bind
     */
    public function bind(mixed $callback): void
    {
        Container::getInstance()->bind($this->name, $callback);
    }
}
