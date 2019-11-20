<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'       => 'Iphone 11 Pro Max',
            'rent_price' => '900',
            'list_price' => '1000',
            'sale_price' => '1400',
            'sold_price' => '1600',
            'profile'    => 'img-iphone11',
            'gallery'    => 'testing',
            'created_by' => 'admin',
            'updated_by' => 'admin',
        ]);
        DB::table('products')->insert([
            'name'       => 'Oppo Reno 11',
            'rent_price' => '800',
            'list_price' => '900',
            'sale_price' => '970',
            'sold_price' => '1000',
            'profile'    => 'img-reno11',
            'gallery'    => 'testing',
            'created_by' => 'user9',
            'updated_by' => 'user9',
        ]);
        DB::table('products')->insert([
            'name'       => 'Samsung Note 10',
            'rent_price' => '800',
            'list_price' => '900',
            'sale_price' => '1200',
            'sold_price' => '1300',
            'profile'    => 'img-samsung-note11',
            'gallery'    => 'testing',
            'created_by' => 'user11',
            'updated_by' => 'user11',
        ]);
    }
}
