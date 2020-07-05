<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCategories()
    {
        $response = $this->get('/categories');

        $response->assertStatus(200);
    }

    public function testCategory()
    {
        $id = rand(1, 5);

        $response = $this->get('/categories/' . $id);

        $response->assertStatus(200);
    }


}
