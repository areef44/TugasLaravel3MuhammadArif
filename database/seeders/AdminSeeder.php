<?php

namespace Database\Seeders;

use App\Models\Admins;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admins::query()->create([
            "nama" => "Fulan",
            "email" => "fulan@gmail.com",
            "password" => "fulan123"
        ]);
    }
}
