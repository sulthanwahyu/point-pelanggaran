<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\jurusan;
use App\Models\kelas;
use App\Models\siswa;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = guru::with('kelas')->get();
        return view('guru.dashboardguru', ['guru'=>$guru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas= kelas::all();
        $guru= guru::all();
        return view('guru.formGuru', compact('kelas','guru'));
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
            'nama',
            'nipd',
            'alamat',
            'nohp', 
            'email', 
            'kelas_id'
        ]);

        $input = $request->all();
        guru::create($input);

        return redirect('/guru')
        ->with('toast_success','Teacher data created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataguru = guru::findorfail($id);
        return view('guru.detailGuru',['dataguru' => $dataguru]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas= kelas::all();
        $guru = guru::findOrFail($id);
        return view('guru.editGuru', compact('kelas','guru'));
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
            'nama',
            'nipd',
            'alamat',
            'nohp', 
            'email', 
            'kelas_id'
        ]);

         $teacher = guru::findOrFail($id);
        $input = $request->all();
        $teacher->update($input);

        return redirect('/guru')
        ->with('toast_success','teacher data edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = guru::findOrFail($id);
        $teacher->delete();

        return redirect('/guru')
        ->with('success','teacher data deleted successfully');
    }
}