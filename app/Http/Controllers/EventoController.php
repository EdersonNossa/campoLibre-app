<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index',compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $eventos=new Evento;
        $eventos->nomevento=$request->input('nombre');
        $eventos->fecevento=$request->input('fecha');
        $eventos->horevento=$request->input('hora');
        $eventos->lugevento=$request->input('lugar');
        $eventos->descevento=$request->input('descripcion');
        $eventos->estevento=$request->input('estado');

        $eventos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $eventos=Evento::find($id);
        $eventos->nomevento=$request->input('nombre');
        $eventos->fecevento=$request->input('fecha');
        $eventos->lugevento=$request->input('lugar');
        $eventos->horevento=$request->input('hora');
        $eventos->descevento=$request->input('descripcion');
        $eventos->estevento=$request->input('estado');


        $eventos->update();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $eventos=Evento::find($id);
        $eventos->delete();
        return redirect()->back();
        //
    }
}
