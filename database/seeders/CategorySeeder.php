<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('first_categories')->insert([
            ['name' => '食品・飲料'],
            ['name' => 'ワイン・お酒'],
            ['name' => 'ベビー用品・おもちゃ'],
        ]);
        
        
        DB::table('second_categories')->insert([
            ['name' => 'お菓子'],
            ['name' => 'お肉'],
            ['name' => '飲料'],
            
            ['name' => 'ワイン'],
            ['name' => 'スピリッツ'],

            ['name' => 'おもちゃ'],
            ['name' => 'ベビー家具'],
        ]);
    }
}
