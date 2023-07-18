<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class guru extends Model
{
    use HasFactory,SoftDeletes;

    protected $table ='guru';

        
    protected $fillable=[
        'nama',
        'nipd',
        'alamat',
        'nohp', 
        'email', 
        'kelas_id'
    ];

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }
}