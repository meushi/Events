<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('venues')->insert([
            'title'=>'イベントA',
            'body'=>'楽しかった',
            'updated_at' => new DateTime(),
         ]);
         
         DB::table('venues')->insert([
            'title'=>'イベントB',
            'body'=>'楽しかった',
            'updated_at' => new DateTime(),
         ]);
    }
}