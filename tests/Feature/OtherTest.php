<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OtherTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function testWelcome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAboutUs()
    {
        $response = $this->get('/about_us');

        $response->assertStatus(200);
    }
}
