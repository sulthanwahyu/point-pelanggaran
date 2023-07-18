<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\pelanggaran;
use App\Models\laporan;
use App\Models\siswa;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = laporan::with('guru','pelanggaran','siswa')->get();
        return view('laporan.dashboardLaporan', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laporan= laporan::all();
        $siswa= siswa::all();
        $guru = guru::all();
        $pelanggaran = pelanggaran::all();
        return view('laporan.formLaporan', compact( 'laporan','siswa','guru','pelanggaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa_id = $request->siswa_id;
        $pelanggaran_id = $request->pelanggaran_id;
        $data = $request->all();
        $check = $this->make($data);
        $siswa = siswa::findOrFail($siswa_id);
        $pelanggaran = pelanggaran::findOrFail($pelanggaran_id);
        $pointS = $siswa->point;
        $pointP = $pelanggaran->jmlh_point;
        $pointS-=$pointP;
        if($check) {
            $siswa->laporan()->attach($check->id);
            $siswa->update([
                'point' =>$pointS
            ]);
        }

        return redirect()->route('laporan')
        ->with('success','laporan data created succesfully');
    }

    public function make(array $data)
    {


        return laporan::create([


            'guru_id' => $data['guru_id'],
            'pelanggaran_id' =>  $data['pelanggaran_id'],
          ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laporan = laporan::findOrFail($id);
        return view('laporan.dashboardLaporan', compact('laporan'));
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
            'guru_id',
            'siswa',
        'pelanggaran_id',
        ]);

         $laporan = laporan::findOrFail($id);
        $input = $request->all();
        $laporan->update($input);

        return redirect('laporan')
        ->with('toast_success','report data edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $laporan = laporan::with('siswa')->findOrFail($id);
            $siswa = siswa::findOrFail($laporan->siswa[0]->id);
            $siswa->laporan()->detach($siswa->id);
        	$laporan->delete();
        	return redirect()->route('laporan')
            ->with('success','report deleted permanently successfully');
        }
    }


// public function destroy($id)
// {
// $laporan = laporan::findOrFail($id);
// $laporan -> delete();
// //faindorfail function idny ga ktmu jd 404
// return redirect('/laporan')
// ->with('success','pengguna data deleted successfully');