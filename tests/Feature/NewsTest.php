<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function testNewsCreate()
    {
        $response = $this->get('/news/create');

        $response->assertStatus(200);
    }

    public function testNewsEdit()
    {
        $id = rand(1, 20);

        $response = $this->get('/news/' . $id . '/edit');

        $response->assertStatus(200);
    }

    public function testSingleNews()
    {
        $id = rand(1, 20);

        $response = $this->get('/news/' . $id);

        $response->assertStatus(200);
    }
    
}
