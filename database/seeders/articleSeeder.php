<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class articleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'Tinggi Import Smartphone Ke indonesia',
            'author' => 'Fulan',
            'content' => 'Lorem Ipsum Bla Bla Bla',
            'picture' => 'news.jpg'
        ]);
    }
}
