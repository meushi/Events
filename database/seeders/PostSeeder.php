<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('posts')->insert([
        'title'=>'イベントA',
        'body'=>'楽しかった',
        'user_id'=>1,
        'event_id'=>1,
        'venue_id'=>1,
        'performer_id'=>1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
         ]);
         
         DB::table('posts')->insert([
        'title'=>'イベントA',
        'body'=>'また行きたい',
        'user_id'=>1,
        'event_id'=>2,
        'venue_id'=>2,
        'performer_id'=>2,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
         ]);
    }
}
