<?php

namespace App\Http\Controllers;

use App\BaseDeDatos;
use Illuminate\Http\Request;

class BaseDeDatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baseDatos = BaseDeDatos::orderBy('id', 'DESC')->paginate(10);
        return view('baseDeDatos/baseDeDatos')->with('baseDatos', $baseDatos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('baseDeDatos/baseDeDatosCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        BaseDeDatos::create($request->all());
        return redirect('baseDeDatos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BaseDeDatos  $baseDeDatos
     * @return \Illuminate\Http\Response
     */
    public function show(BaseDeDatos $baseDeDatos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BaseDeDatos  $baseDeDatos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $baseDeDatos = BaseDeDatos::findOrFail($id);
        return view('baseDeDatos/baseDeDatosEdit')
            ->with('baseDeDatos', $baseDeDatos);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BaseDeDatos  $baseDeDatos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BaseDeDatos  $baseDeDatos
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaseDeDatos $baseDeDatos)
    {
        //
    }
}
