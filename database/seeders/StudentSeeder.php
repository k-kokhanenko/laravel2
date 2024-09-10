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
        DB::table('student')->insert([
            'group_id' => 1,
            'surname' => 'Петров',
            'name' => 'Иван',             
            'created_at' => now(),
            'updated_at' => now()
       ]); 
    }
}
