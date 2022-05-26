<?php

namespace MortenDHansen\LaravelUserSettingsInDatabase\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use MortenDHansen\LaravelUserSettingsInDatabase\Tests\TestCase;

class BasicTest extends TestCase
{
    use RefreshDatabase;

    public function testItRunsTests()
    {
        $this->assertDatabaseCount('ldb_settings_options', 0);
        $this->assertDatabaseCount('ldb_settings_values', 0);
    }
}