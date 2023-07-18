<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\siswa;
use Illuminate\Http\Request;

class PencarianController extends Controller
{
    public function cari_siswa(Request $request){
        $data=[];

        if($request->filled('q')){
            $data = siswa::select("nama","id")->where("nama", 'LIKE', '%'. $request->get('q').'%')->get();
        }

        return response()->json($data);
    }

    public function cari_guru(Request $request){
        $data=[];

        if($request->filled('q')){
            $data = guru::select("nama","id")->where("nama", 'LIKE', '%'. $request->get('q').'%')->get();
        }

        return response()->json($data);
    }
}