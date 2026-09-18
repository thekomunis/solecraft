<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Verify test suite strictly uses the dedicated test database from .env.testing.
     */
    public function test_environment_uses_dedicated_testing_database(): void
    {
        $this->assertEquals('shoe_care_recommendation_test', config('database.connections.mysql.database'));
        $this->assertEquals('3307', (string) config('database.connections.mysql.port'));
    }
}
