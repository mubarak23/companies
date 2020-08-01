<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(
            //CompaniesTableSeeder::class,
          //  ContactsTableSeeder::class
            
        //);
        //UsersTableSeeder::class
      factory(Company::class, 10)->create()->each(function ($comany){
            $comany->contacts()->saveMany(
                factory(Contact::class, rand(5, 10)->make()
                )
            );
        });
        //CompaniesTableSeeder::class;
        //ContactTableSeeder::class;
    }
}
