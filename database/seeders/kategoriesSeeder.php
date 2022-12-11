<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategories')->insert([
            'nama_kategori' => 'Laptops'
        ]);
        DB::table('kategories')->insert([
            'nama_kategori' => 'Smartphones'
        ]);
    }
}
