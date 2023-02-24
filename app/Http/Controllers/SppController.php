<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spp = DB::table('spps AS spp')
                ->select('spp.id_spp', 'spp.tahun', 'spp.nominal')
                ->orderBy('spp.id_spp', 'asc')
                ->get();

        return view('admin.spp.index', compact('spp') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin/spp/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSppRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spp = Spp::create([
            'id_spp' => $request->id_spp,
            'tahun' => $request->tahun,
            'nominal' => $request->nominal
        ]);

        return redirect("spp/index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function show(Spp $spp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function edit($id_spp)
    {
        $spp = Spp::find($id_spp);

        return view('admin.spp.edit', compact('spp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSppRequest  $request
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_spp)
    {

        $spp = Spp::find($id_spp);

        $spp->id_spp = $request->id_spp;
        $spp->tahun = $request->tahun;
        $spp->nominal = $request->nominal;
        $spp->save();

        return redirect("spp/index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_spp)
    {
        $spp = Spp::find($id_spp);
        $spp->delete();

        return redirect("spp/index");
    }
}
