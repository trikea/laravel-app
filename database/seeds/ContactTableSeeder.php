<?php

use Illuminate\Database\Seeder;
use App\Contact;
class ContactTableSeeder extends Seeder
{
    // php artisan db:seed --class=ContactTableSeeder
    // composer dump-autoload
    public function run()
    {
        Contact::create([
            'name' => 'Testing',
            'phone' => '098765432',
        ]);
        
        // DB::table('contacts')->insert([
        //         'name' => 'Flexi',
        //         'phone'=> '093929324',
        //         ]);
    }
}
