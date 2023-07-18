<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pelanggaran extends Model
{
    use HasFactory,SoftDeletes;

    protected $table ='pelanggaran';

    protected $fillable=[
        'jenispelanggaran',
        'tindakan',
        'jmlh_point',
        
    ];

}
