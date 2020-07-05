<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    
     public function testLogin()
    {
        $response = $this->get('/user/login');

        $response->assertStatus(200);
    }

    public function testComment()
    {
        $response = $this->get('/user/comment');

        $response->assertStatus(200);
    }

    public function testFeedback()
    {
        $response = $this->get('/user/feedback');

        $response->assertStatus(200);
    }

    public function testRequest()
    {
        $response = $this->get('/user/request');

        $response->assertStatus(200);
    }

    public function testRequests()
    {
        $response = $this->get('/user/requests');

        $response->assertStatus(200);
    }
}
