<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('companies')->truncate();
        $companies = [];
        $faker = Faker::create();
        foreach (range(1, 10) as $index){
            $companies[] =[
                'name' => $faker->company,
                'address' => $faker->address,
                'email' => $faker->email,
                'website' => $faker->domainName,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        DB::table('companies')->insert($companies);
    }
}
