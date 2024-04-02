<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

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
            'name'=>'Aさん',
            'body'=>'楽しかった',
            'updated_at' => new DateTime(),
         ]);
         
         DB::table('performers')->insert([
            'name'=>'Bさん',
            'body'=>'楽しかった',
            'updated_at' => new DateTime(),
         ]);
    }
}