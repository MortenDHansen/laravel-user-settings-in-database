<?php

namespace MortenDHansen\LaravelUserSettingsInDatabase\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \Mortenhansen\LaravelUserSettingsInDatabase\DatabaseSettingsServiceProvider::class
        ];
    }

    public function setUp(): void
    {
        parent::setUp();
    }

    protected function defineDatabaseMigrations()
    {
        $this->loadLaravelMigrations();
    }
}