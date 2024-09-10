<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('groups')->insert([
             'title' => 'Группа FS-01',
             'start_from' => '2023-01-10',
             'is_active' => true,             
             'created_at' => now(),
             'updated_at' => now()
        ]);        
    }
}
