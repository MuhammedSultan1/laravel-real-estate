<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewAboutPageTest extends TestCase
{
    /** @test */
    public function the_about_page_loads_correctly()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        
        $response->assertSee('This project was built with Laravel 8, Livewire and Voyager. Below are some of the things I learned and improved on while building this project.');
    }
}