<?php

namespace Database\Seeders;

use App\Models\siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        siswa::factory()->count(30)->create();
    }
}
