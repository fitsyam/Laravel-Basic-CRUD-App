<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [   
                'id' => 1,
                'name' => 'John Doe',
                'score' => 80,
            ],
            [
                'id' => 2,
                'name' => 'Jane Doe',
                'score' => 90,
            ],
            [
                'id' => 3,
                'name' => 'Johnny Doe',
                'score' => 100,
            ],
        ];
        DB::table('students')->insert($data);
    }
}
