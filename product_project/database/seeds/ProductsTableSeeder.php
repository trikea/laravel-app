<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * composer dump-autoload
     * php artisan db:seed --class=ProductsTableSeeder
     */
    public function run()
    {
        Product::firstOrCreate(['name' => 'Iphone 6 Plus']);
        Product::firstOrCreate(['name' => 'Honda Dream 2020']);
        Product::firstOrCreate(['name' => 'Samsung Galaxy Note 10']);
    }
}
