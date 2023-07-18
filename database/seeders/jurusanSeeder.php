<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\jurusan;
use Illuminate\Support\Facades\Schema;


class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        jurusan::truncate();

        Schema::enableForeignKeyConstraints();

        $data = [
            ['nama'=>'PPLG'],
            ['nama'=>'Animasi'],
            ['nama'=>'TJKT'],
            ['nama'=>'TEI'],
            ['nama'=>'Broadcast'],
        ];


        foreach ($data as $item){
            jurusan::insert([
                'nama'=> $item ['nama'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    
    }
}