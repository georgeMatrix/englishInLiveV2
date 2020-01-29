<?php

namespace App\Http\Controllers;

use App\ClientePrueba;
use Illuminate\Http\Request;

class ClientePruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = ClientePrueba::all();
        return view("clientePrueba/clientePruebaList")->with("cliente", $cliente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("clientePrueba/clientePruebaForm");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*header("Access-Control-Allow-Origin: *");

        // ALLOW OPTIONS METHOD
        $headers = [
            'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin'
        ];*/

        ClientePrueba::create($request->all());
        return response("El dato fue cargado con exito");
        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientePrueba  $clientePrueba
     * @return \Illuminate\Http\Response
     */
    public function show(ClientePrueba $clientePrueba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientePrueba  $clientePrueba
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientePrueba $clientePrueba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientePrueba  $clientePrueba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientePrueba $clientePrueba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientePrueba  $clientePrueba
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientePrueba $clientePrueba)
    {
        //
    }
}
