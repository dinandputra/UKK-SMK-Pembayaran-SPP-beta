<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Spp;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = DB::table('siswas AS sws')
                ->join('spps AS spp' , 'sws.id_spp', '=', 'spp.id_spp')
                ->join('kelas AS kls', 'sws.id_kelas', '=', 'kls.id_kelas')
                ->select('sws.nisn', 'sws.nis', 'sws.nama', 'kls.nama_kelas', 'kls.jurusan', 'sws.alamat', 'sws.no_telp', 'spp.nominal')
                ->get();

        // return response()->json( [$siswa ] );
        return view('siswa.index' , compact('siswa') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();

        $spp = Spp::all();

        return view('siswa.create', compact('kelas', 'spp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = Siswa::create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp
        ]);

        return redirect("siswa/index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($nisn)
    {
        $siswa = Siswa::find($nisn);
        $kelas = Kelas::all();
        $spp = Spp::all();

        return view('siswa.edit', compact ('siswa', 'kelas', 'spp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiswaRequest  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nisn)
    {
        $siswa = Siswa::find($nisn);
        $siswa->nisn = $request->nisn;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->alamat = $request->alamat;
        $siswa->no_telp = $request->no_telp;
        $siswa->id_spp = $request->id_spp;
        $siswa->save();

        return redirect("siswa/index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($nisn)
    {
        $siswa = Siswa::find($nisn);
        $siswa->delete();

        return redirect("siswa/index");
    }
}
