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
            'profile'    => 'img-iphone-11',
            'gallery'    => 'Phone',
            'created_by' => 'admin',
            'updated_by' => 'admin',
        ]);
        DB::table('products')->insert([
            'name'       => 'Iphone 6 Plus',
            'rent_price' => '800',
            'list_price' => '900',
            'sale_price' => '970',
            'sold_price' => '1000',
            'profile'    => 'img-iphone-6-plus',
            'gallery'    => 'Phone',
            'created_by' => 'admin',
            'updated_by' => 'admin',
        ]);
        DB::table('products')->insert([
            'name'       => 'Samsung Galaxy Note 10',
            'rent_price' => '800',
            'list_price' => '900',
            'sale_price' => '1200',
            'sold_price' => '1300',
            'profile'    => 'img-samsung-note-11',
            'gallery'    => 'Phone',
            'created_by' => 'admin',
            'updated_by' => 'admin',
        ]);
    }
}
