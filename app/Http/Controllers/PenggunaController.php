<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = User::all();

        // return response()->json( [$pengguna ] );
        return view('pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengguna = User::all();

        // return response()->json( [$pengguna ] );
        return view('pengguna.create', compact('pengguna'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepenggunaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengguna = User::create([
            'id_petugas' => $request->id_petugas,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama_petugas' => $request->nama_petugas,
            'level' => $request->level
        ]);

        return redirect("pengguna/index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show($id_petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit($id_petugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepenggunaRequest  $request
     * @param  \App\Models\pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id_petugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id_petugas)
    {
        //
    }
}
