<?php

namespace App\Http\Controllers;

use App\Bajas;
use App\ControlEscolar;
use Illuminate\Http\Request;

class BajasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = ControlEscolar::orderBy('id', 'DESC')->paginate(10);
        return view('bajas/bajas')->with('registros', $registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bajas/bajasCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bajas  $bajas
     * @return \Illuminate\Http\Response
     */
    public function show(Bajas $bajas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bajas  $bajas
     * @return \Illuminate\Http\Response
     */
    public function edit(Bajas $bajas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bajas  $bajas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bajas $bajas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bajas  $bajas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bajas $bajas)
    {
        //
    }

    public function darDeBaja($id)
    {
        $bajas = ControlEscolar::find($id);
        $bajas->status = 'inactive';
        $bajas->save();
        return response()->json(['status' => $bajas->status, 'id'=> $bajas->id]);
    }

    public function darDeBajaCount()
    {
        $countBajas = ControlEscolar::all()->count();
        $bajas = ControlEscolar::all();
        return response()->json(['bajas' => $bajas, 'countBajas' => $countBajas]);
    }
}
