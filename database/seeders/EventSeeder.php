<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('events')->insert([
            'name'=>'イベントA',
            'body'=>'楽しかった',
            'updated_at' => new DateTime(),
         ]);
         
         DB::table('events')->insert([
            'name'=>'イベントB',
            'body'=>'楽しかった',
            'updated_at' => new DateTime(),
         ]);
    }
}