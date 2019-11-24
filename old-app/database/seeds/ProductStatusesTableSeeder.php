<?php

use Illuminate\Database\Seeder;

class ProductStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_statuses')->insert([
            'name' => 'Draft',
        ]);
        DB::table('product_statuses')->insert([
            'name' => 'Public',
        ]);
    }
}
