<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = Evento::query();

    // Filtrar por ID
    if ($request->filled('idevento')) {
        $query->where('idevento', $request->idevento);
    }

    // Filtrar por Nombre (búsqueda parcial)
    if ($request->filled('nomevento')) {
        $query->where('nomevento', 'LIKE', '%' . $request->nomevento . '%');
    }

    // Filtrar por Estado
    if ($request->filled('estevento')) {
        $query->where('estevento', $request->estevento);
    }

    if ($request->filled('fecevento')) {
        $query->whereDate('fecevento', $request->fecevento);
    }

    // Aplicar lógica condicional
    if ($request->anyFilled(['idevento', 'nomevento', 'esteevento', 'fecevento'])) {
        // Si hay filtros activos, mostrar con paginación
        $eventos = $query->paginate(10);
    } else {
        // Si no hay filtros, mostrar todos los eventos sin paginación
        $eventos = $query->get();
    }

    return view('Eventos.index', compact('eventos'));
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
        $eventos = new Evento;
        $eventos->nomevento = $request->input('nombre');
        $eventos->fecevento = $request->input('fecha');
        $eventos->horevento = $request->input('hora');
        $eventos->lugevento = $request->input('lugar');
        $eventos->descevento = $request->input('descripcion');
        $eventos->estevento = $request->input('estado');

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
        $eventos = Evento::find($id);
        $eventos->nomevento = $request->input('nombre');
        $eventos->fecevento = $request->input('fecha');
        $eventos->lugevento = $request->input('lugar');
        $eventos->horevento = $request->input('hora');
        $eventos->descevento = $request->input('descripcion');
        $eventos->estevento = $request->input('estado');


        $eventos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $eventos = Evento::find($id);
        $eventos->delete();
        return redirect()->back();
        //
    }
}
