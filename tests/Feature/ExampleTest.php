<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
	public function test_blog_index()
    {
        $response = $this->get('/blog');
        $response->assertViewIs('blog.index');
        //$response->assertStatus(200);
    }
    public function test_home()
    {
        $response = $this->get('/');
        $response->assertViewIs('welcome');
        //$response->assertStatus(200);
    }
}
