<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //SQL: insert into categories ()

        //Query Builder
        for($i = 1; $i <= 10; $i++){
        DB::table('categories')->insert([
            'name' => 'Category1' . $i,
            'created_at' => now(),
        ]);

        
    }
}
}
