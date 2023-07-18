<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jurusan extends Model
{
    use HasFactory,SoftDeletes;

    protected $table='jurusan';

    protected $fillable=[
        'nama',
        
    ];

    public function jurusan(){
        return $this->hasMany(jurusan::class, 'jurusan_id','id');
    }

    public function siswa(){
        return $this->hasMany(siswa::class, 'jurusan_id','id');
    }
}
