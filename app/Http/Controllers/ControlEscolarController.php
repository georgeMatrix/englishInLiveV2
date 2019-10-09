<?php

namespace App\Http\Controllers;

use App\ControlEscolar;
use App\Nivel;
use Illuminate\Http\Request;

class ControlEscolarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = ControlEscolar::orderBy('id', 'DESC')->paginate(10);
        return view('controlEscolar/controlEscolar')->with('registros', $registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('controlEscolar/controlEscolarCreate');
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
        ControlEscolar::create($request->all());
        return redirect('controlEscolar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ControlEscolar  $controlEscolar
     * @return \Illuminate\Http\Response
     */
    public function show(ControlEscolar $controlEscolar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ControlEscolar  $controlEscolar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $controlEscolar = ControlEscolar::findOrFail($id);
        return view('controlEscolar/controlEscolarEdit')
            ->with('controlEscolar', $controlEscolar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ControlEscolar  $controlEscolar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $controlEscolar = $request->except(['_token', '_method']);
        ControlEscolar::where('id', '=', $id)->update($controlEscolar);
        return redirect('controlEscolar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ControlEscolar  $controlEscolar
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlEscolar $controlEscolar)
    {
        //
    }
}
