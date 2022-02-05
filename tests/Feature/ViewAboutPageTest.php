<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewAboutPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        
        $response->assertSee('This project was built with Laravel 8, Livewire and Voyager. Below are some of the things I learned and improved on while building this project.');
    }
}