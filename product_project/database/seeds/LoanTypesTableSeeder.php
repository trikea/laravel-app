<?php

use Illuminate\Database\Seeder;

class LoanTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * composer dump-autoload
     * php artisan db:seed --class=LoanTypesTableSeeder
     */
    public function run()
    {
        LoanType::firstOrCreate(['name' => 'EOC']);
        LoanType::firstOrCreate(['name' => 'Interest']);
    }
}
