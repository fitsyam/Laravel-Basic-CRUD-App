<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $Faker = Faker::create('id_ID');

       for ($i=0; $i < 10; $i++) { 
           DB::table('students')->insert([
               'name' => $Faker->name,
               'score' => $Faker->numberBetween(0,100),
           ]);
       }
    }
}
