<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerformerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('performers')->insert([
            'title'=>'イベントA',
            'body'=>'楽しかった',
            'updated_at' => new DateTime(),
         ]);
         
         DB::table('performers')->insert([
            'title'=>'イベントB',
            'body'=>'楽しかった',
            'updated_at' => new DateTime(),
         ]);
    }
}