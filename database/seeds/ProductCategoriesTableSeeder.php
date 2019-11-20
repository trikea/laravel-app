<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'name' => 'Phone',
        ]);
        DB::table('product_categories')->insert([
            'name' => 'Speaker',
        ]);
        DB::table('product_categories')->insert([
            'name' => 'Tablet',
        ]);
    }
}
