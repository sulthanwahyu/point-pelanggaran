<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = jurusan::all();
        return view('jurusan.dashboardJurusan', ['jurusan' => $jurusan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = jurusan::all();
        return view('jurusan.formJurusan', ['jurusan' => $jurusan]);
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
        ]);

        $request = jurusan::create($request->all());

        return redirect('/jurusan')
        // siswa nama route
            ->with('success','transaksi data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jurusan = jurusan::with('siswa')->findOrFail($id);
        return view('jurusan.detailJurusan', ['jurusan' => $jurusan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = jurusan::findOrFail($id);
        return view('jurusan.editJurusan', ['jurusan' => $jurusan]);
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
        $jurusan = jurusan::findOrFail($id);
        $jurusan->update($request->all());

        return redirect('/jurusan')
            ->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = jurusan::findOrFail($id);
        $jurusan -> delete();
        //faindorfail function idny ga ktmu jd 404
        return redirect('/jurusan')
        ->with('success','pengguna data deleted successfully');
    }
}
