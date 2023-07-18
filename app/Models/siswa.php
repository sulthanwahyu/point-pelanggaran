<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class siswa extends Model
{
    use HasFactory,SoftDeletes;

    protected $table ='siswa';

    protected $fillable=[
        'nama',
        'nisn',
        'jeniskelamin',
        'alamat',
        'nohp',
        'email',
        'point',
        'kelas_id',
        'jurusan_id',
    ];

  
    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    } 
    public function jurusan()
    {
        return $this->belongsTo(jurusan::class);
    } 

    public function laporan()
    {
        return $this->belongsToMany(laporan::class, 'pelanggaran_siswa','siswa_id','laporan_id');
    } 
}
