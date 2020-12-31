<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function does_the_endpoint_for_the_root_exist()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
