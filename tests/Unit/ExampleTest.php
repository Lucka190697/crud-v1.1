<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    //use CreatesApplication;

    public function testBasicTest()
    {
    	$response = $this->get('/');
        $response->assertStatus(200);
    }
}