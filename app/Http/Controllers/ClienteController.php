<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;
use GuzzleHttp\Client;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes= Cliente::all();
        return view('cliente.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes= new Cliente();
        
        $clientes->nombre= $request->get('nombre');
        $clientes->apellido= $request->get('apellido');
        $clientes->dni= $request->get('dni');
        $clientes->pago= $request->get('pago');

        $clientes->save();

        return redirect('/clientes');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente= Cliente::find($id); 
        return view('cliente.edit')->with('cliente',$cliente);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente= Cliente::find($id);
        
        $cliente->nombre= $request->get('nombre');
        $cliente->apellido= $request->get('apellido');
        $cliente->dni= $request->get('dni');
        $cliente->pago= $request->get('pago');

        $cliente->save();

        return redirect('/clientes');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente= Cliente::find($id);
        $cliente->delete();
        return redirect('/clientes');
    }
}
