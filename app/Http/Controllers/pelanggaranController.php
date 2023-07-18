<?php

namespace App\Http\Controllers;

use App\Models\pelanggaran;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggaran = pelanggaran::all();
        return view('pelanggaran.dashboardPelanggaran', ['pelanggaran'=>$pelanggaran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggaran= pelanggaran::all();
        return view('pelanggaran.formPela', compact('pelanggaran'));
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
            'jenispelanggaran',
            'tindakan',
            'jmlh_point',
        ]);

        $input = $request->all();
        pelanggaran::create($input);

        return redirect('/pelanggaran')
        ->with('toast_success','Violation data edit successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelanggaran = pelanggaran::findorfail($id);
        return view('pelanggaran.detailPela',['pelanggaran' => $pelanggaran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggaran = pelanggaran::findOrFail($id);
        return view('pelanggaran.editPela', compact('pelanggaran'));
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
            'jenispelanggaran',
            'tindakan',
            'jmlh_point',
        ]);

         $violation = pelanggaran::findOrFail($id);
        $input = $request->all();
        $violation->update($input);

        return redirect('/pelanggaran')
        ->with('toast_success','Violation data edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $violation = pelanggaran::findOrFail($id);
        $violation->delete();

        return redirect('/pelanggaran')
        ->with('success','violation data deleted successfully');
    }
}