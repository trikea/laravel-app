<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * composer dump-autoload
     * php artisan db:seed --class=CategoriesTableSeeder
     */
    public function run()
    {
        Category::firstOrCreate(['name' => 'Phone']);
        Category::firstOrCreate(['name' => 'Computer']);
        Category::firstOrCreate(['name' => 'Moto']);
        Category::firstOrCreate(['name' => 'Car']);
    }
}
