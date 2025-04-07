<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notificaciones=Notificacion::all();
        return view('notificaciones.index', compact('notificaciones'));
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
        $notificaciones = new Notificacion;
        $notificaciones->tipo = $request->input('tipo');
        $notificaciones->usuario = $request->input('usuario');
        $notificaciones->fecha = $request->input('fecha');
        $notificaciones->categoria = $request->input('categoria');
        $notificaciones->descripcion = $request->input('descripcion');
        $notificaciones->estado = $request->input('estado');

        $notificaciones->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Notificacion $notifocacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notificacion $notifocacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idnotificaciones)
    {
        $notificaciones = Notificacion::find($idnotificaciones);
        $notificaciones->tipo = $request->input('tipo');
        $notificaciones->usuario = $request->input('usuario');
        $notificaciones->fecha = $request->input('fecha');
        $notificaciones->categoria = $request->input('categoria');
        $notificaciones->descripcion = $request->input('descripcion');
        $notificaciones->estado = $request->input('estado');

        $notificaciones->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idnotificaciones)
    {
        //
        $notificaciones = Notificacion::find($idnotificaciones);

        $notificaciones->delete();
        return redirect()->back();
    }
}
