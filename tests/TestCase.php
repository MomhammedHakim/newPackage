<?php
namespace Tests;

use Nsm\Hakim\MethodCacheServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return[
                MethodCacheServiceProvider::class
        ];
    }
}