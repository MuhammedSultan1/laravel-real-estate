<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewWelcomePageTest extends TestCase
{
    /** @test */
    public function the_welcome_page_loads_correctly()
    {
        //Arrange
        //Nothing to arrange.

        //Act
        $response = $this->get('/');

        //Assert
        $response->assertStatus(200);
        $response->assertSee('Let us help you find the perfect home.');
        $response->assertSee('Enter a zipcode or a city and state code in the field below and click search.');
        $response->assertDontSee('The Property Experts Real Estate Project', $escaped = true);
    }
    
}