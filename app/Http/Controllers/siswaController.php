<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kelas;
use App\Models\siswa;
use App\Models\jurusan;
use App\Models\pelanggaran_siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::all();
        return view('siswa.dashboardSiswa', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa= siswa::all();
        $guru = guru::all();
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        return view('siswa.formSiswa', compact( 'siswa','guru','kelas','jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'jeniskelamin' => 'required',
            'alamat' =>'required',
            'nohp' => 'required',
            'kelas_id' => 'required',
            'jurusan_id' => 'required',
        ]);

        $input = $request->all();
        siswa::create($input);

        return redirect('/siswa')  ->with('toast_success', 'Data Berhasil Tersimpan');
        // $siswa_id = $request->siswa_id;
        // $siswa = siswa::findOrFail($siswa_id);
        // $data = $request->all();
        // $check = $this->rent($data);
        // $point = $siswa->point;
        // $point= $point-1 ;

        // if ($check) {
        //     $siswa->rent()->attach($check->id);
        //     $siswa->update([
        //         'point'=>$point
        //     ]);

        // };
        // return redirect()->route('siswa', $siswa->id)->with([
        //     'message' => 'Success Rent Book !',
        //     'type' => 'info'
        // ]);

    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa.detailSiswa', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa= siswa::findOrFail($id);
        $guru = guru::all();
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        return view('siswa.editSiswa', compact('siswa', 'guru','kelas','jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'jeniskelamin' => 'required',
            'alamat' =>'required',
            'nohp' => 'required',
            'kelas_id' => 'required',
            'jurusan_id' => 'required',
        ]);

        $siswa = siswa::findOrFail($id);
        $input = $request->all();
        $siswa->update($input);

        return redirect('/siswa')
        ->with('toast_success','Siswa data edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = siswa::findOrFail($id);
        $siswa->delete();

        return redirect('/siswa')
        ->with('success','siswa data deleted successfully');
    }
}
