<?php

namespace Tests\Feature\Routes;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Product;
use App\ProductCategory;
class WebTest extends TestCase
{
    // vendor/bin/phpunit --filter 'Tests\\Feature\\Routes\\WebTest'
    public function testIsContactPageExists()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }
    // must use name test for start of function name
    public function testVisitTheProductCategories()
    {
        $response = $this->get('/product_categories');
        $response->assertStatus(200);
    }
    public function testVisitTheProductStatuses()
    {
        $response = $this->get('/product_statuses');
        $response->assertStatus(200);
    }
    public function testVisitTheProducts()
    {
        $response = $this->get('/products');
        $response->assertStatus(200);
    }
    public function testCodeProduct()
    {
        $product = Product::find(7);
        $expect  = 00007;
        $this->assertEquals($expect, $product->Code);
    }
    public function testNameProductStatus()
    {
        $product = ProductStatus::find(12);
        $expect  = 'GO PRO HERO 8';
        $this->assertTrue($expect, $product->name);
    }
}
