<?php

namespace App\Methods;

/**
 * usage:
 * use \App\Methods\AsTestDataProvider;
 */
trait AsTestDataProvider
{
    public static function asTestDataProvider(): \Generator
    {
        foreach (new self() as $value) {
            yield [$value];
        }
    }
}
