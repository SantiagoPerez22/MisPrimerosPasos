<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use App\Models\Ambito;
use App\Models\Nucleo;
use App\Models\Nivel;
use App\Models\Cuenta;
use App\Models\Sala;
use Illuminate\Http\Request;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clases = Clase::with(['ambito', 'nucleo', 'nivel', 'profesor', 'asistente1', 'asistente2', 'sala'])->get();
        return view('clases.index', compact('clases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ambitos = Ambito::all();
        $nucleos = Nucleo::all();
        $niveles = Nivel::all();
        $cuentas = Cuenta::all();
        $salas = Sala::all();
        return view('clases.create', compact('ambitos', 'nucleos', 'niveles', 'cuentas', 'salas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_ambito' => 'required|integer',
            'id_nucleo' => 'required|integer',
            'id_nivel' => 'required|integer',
            'id_profesor' => 'required|integer',
            'id_asistente1' => 'nullable|integer',
            'id_asistente2' => 'nullable|integer',
            'id_sala' => 'required|integer',
            'fecha' => 'required|date',
            'objetivo' => 'nullable|string',
            'observaciones' => 'nullable|string'
        ]);

        Clase::create($request->all());

        return redirect()->route('clases.index')
            ->with('success', 'Clase creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clase = Clase::with(['ambito', 'nucleo', 'nivel', 'profesor', 'asistente1', 'asistente2', 'sala'])->findOrFail($id);
        return view('clases.show', compact('clase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clase = Clase::with(['ambito', 'nucleo', 'nivel', 'profesor', 'asistente1', 'asistente2', 'sala'])->findOrFail($id);
        $ambitos = Ambito::all();
        $nucleos = Nucleo::all();
        $niveles = Nivel::all();
        $cuentas = Cuenta::all();
        $salas = Sala::all();
        return view('clases.edit', compact('clase', 'ambitos', 'nucleos', 'niveles', 'cuentas', 'salas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_ambito' => 'required|integer',
            'id_nucleo' => 'required|integer',
            'id_nivel' => 'required|integer',
            'id_profesor' => 'required|integer',
            'id_asistente1' => 'nullable|integer',
            'id_asistente2' => 'nullable|integer',
            'id_sala' => 'required|integer',
            'fecha' => 'required|date',
            'objetivo' => 'nullable|string',
            'observaciones' => 'nullable|string'
        ]);

        $clase = Clase::findOrFail($id);
        $clase->update($request->all());

        return redirect()->route('clases.index')
            ->with('success', 'Clase actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clase = Clase::findOrFail($id);
        $clase->delete();

        return redirect()->route('clases.index')
            ->with('success', 'Clase eliminada correctamente.');
    }
}
