<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\kelas;
use Illuminate\Support\Facades\Schema;


class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        kelas::truncate();

        Schema::enableForeignKeyConstraints();

        $data = [
            ['nama'=>'X'],
            ['nama'=>'XI'],
            ['nama'=>'XII'],
        ];


        foreach ($data as $item){
            kelas::insert([
                'nama'=> $item ['nama'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    
    }
    
}