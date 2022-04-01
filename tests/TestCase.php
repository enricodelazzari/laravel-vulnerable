<?php

namespace Enrico\Vulnarable\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Enrico\Vulnarable\VulnarableServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            VulnarableServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
