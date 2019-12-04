<?php

namespace Tests\Feature\Routes;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WebTest extends TestCase
{
    /**
     * A basic feature test example.
     * vendor/bin/phpunit --filter 'Tests\\Feature\\Routes\\WebTest'
     * @return void
     */
    public function testIsProductPage()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
    }
    public function testIsCategoryPage()
    {
        $response = $this->get('/categories');

        $response->assertStatus(200);
    }
    public function testIsLoanTypePage()
    {
        $response = $this->get('/loantypes');

        $response->assertStatus(200);
    }
}
