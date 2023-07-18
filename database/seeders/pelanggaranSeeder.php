<?php

namespace Database\Seeders;

use App\Models\pelanggaran;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class pelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['jenispelanggaran' => 'Terlambat Masuk Sekolah', 'tindakan' => 'Diberikan hukuman', 'jmlh_point' => '5'],
            ['jenispelanggaran' => 'Keluar sekolah tanpa izin', 'tindakan' => 'Diberikan surat pembinaan', 'jmlh_point' => '10'],
            ['jenispelanggaran' => 'Memakai Celana Ketat/Pensil', 'tindakan' => 'Melepas Jahitan dan membuat surat pernyataan', 'jmlh_point' => '15'],
            ['jenispelanggaran' => 'Memakai Seragam tidak sesuai jadwal', 'tindakan' => 'Dipulangkan untuk mengganti seragam sesuai jadwal', 'jmlh_point' => '15'],
            ['jenispelanggaran' => 'Memakai attribut yang tidak ditentukan sekolah', 'tindakan' => 'Disita dan diberikan pembinaan', 'jmlh_point' => '10'],
            ['jenispelanggaran' => 'Menggunakan HP di kelas tanpa seizin guru', 'tindakan' => 'Disita dan diberikan pembinaan', 'jmlh_point' => '10'],
            ['jenispelanggaran' => 'Membuat pakaian menggunakan logo sekolah yang di modifikasi', 'tindakan' => 'Diberikan pembinaan', 'jmlh_point' => '15'],
            ['jenispelanggaran' => 'Memakai kaos kaki tidak sesuai ketentuan sekolah', 'tindakan' => 'Diberikan pengarahan dan disita kaos kakinya', 'jmlh_point' => '5'],
            ['jenispelanggaran' => 'Memakai kaos kaki tidak sesuai k etentuan sekolah', 'tindakan' => 'Diberikan pengarahan dan disita kaos kakinya', 'jmlh_point' => '5'],
        ];
        foreach($data as $item){
            pelanggaran::insert([
                'jenispelanggaran' => $item['jenispelanggaran'],
                'tindakan' => $item['tindakan'],
                'jmlh_point' => $item['jmlh_point'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}