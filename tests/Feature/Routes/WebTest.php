<?php

namespace Tests\Feature\Routes;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WebTest extends TestCase
{
    // vendor/bin/phpunit --filter 'Tests\\Feature\\Routes\\WebTest'
    // public function testIsContactPageExists()
    // {
    //     $response = $this->get('/contact');
    //     $response->assertStatus(200);
    // }
    // must user name test for start of function name
    public function testVisitTheProductCategories()
    {
        $response = $this->get('/product_categories');
        $response->assertStatus(200);
    }
    public function testVisitTheProductStatuses()
    {
        $response = $this->get('/product_categories');
        $response->assertStatus(200);
    }
    public function testVisitTheProducts()
    {
        $response = $this->get('/products');
        $response->assertStatus(200);
    }
}
