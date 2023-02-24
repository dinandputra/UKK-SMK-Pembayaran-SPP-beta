<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = DB::table('kelas AS kls')
                ->select( 'kls.id_kelas', 'kls.nama_kelas', 'kls.jurusan' )
                ->orderBy('kls.id_kelas', 'asc')
                ->get();

        return view('admin.kelas.index', compact('kelas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("/admin/kelas/create");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKelasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $kelas = Kelas::create([
            "id_kelas" => $request->id_kelas,
            "nama_kelas" => $request->nama_kelas,
            "jurusan" => $request->jurusan,
        ]);

        return redirect("kelas/index");
        // return response()->json( $request->all() );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id_kelas)
    {
        $kelas = Kelas::find($id_kelas);

        return view('admin.kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKelasRequest  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kelas)
    {
        $kelas = Kelas::find($id_kelas);

        $kelas->id_kelas = $request->id_kelas;
        $kelas->nama_kelas  = $request->nama_kelas;
        $kelas->jurusan = $request->jurusan;
        $kelas->save();

        return redirect("kelas/index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kelas)
    {
        $kelas = kelas::find($id_kelas);
        $kelas->delete();

        return redirect("kelas/index");
    }
}
