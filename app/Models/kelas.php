<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kelas extends Model
{
    use HasFactory,SoftDeletes;

    protected $table='kelas';

  protected $fillable=[
        'nama',
        
    ];

    public function siswa(){
        return $this->hasMany(Siswa::class, 'kelas_id','id');
    }

    // public function Jurusan(){
    //     return $this->hasMany(Jurusan::class, 'jurusan_id','id');
    // }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'jurusan_id','id');
    }
 
   
}
