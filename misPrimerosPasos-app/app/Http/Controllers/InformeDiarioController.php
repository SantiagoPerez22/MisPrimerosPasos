<?php

namespace App\Http\Controllers;

use App\Models\InformeDiario;
use App\Models\Condicion;
use App\Models\TutorAlumno;
use Illuminate\Http\Request;

class InformeDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informesDiarios = InformeDiario::with(['condicion', 'alumno.alumno'])->get();
        return view('informes_diarios.index', compact('informesDiarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condiciones = Condicion::all();
        $alumnos = TutorAlumno::with('alumno')->get();
        return view('informes_diarios.create', compact('condiciones', 'alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_condicion' => 'required|integer',
            'id_alumno' => 'required|integer',
            'fecha' => 'required|date'
        ]);

        InformeDiario::create($request->all());

        return redirect()->route('informes_diarios.index')
            ->with('success', 'Informe Diario creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $informeDiario = InformeDiario::with(['condicion', 'alumno.alumno'])->findOrFail($id);
        return view('informes_diarios.show', compact('informeDiario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informeDiario = InformeDiario::with(['condicion', 'alumno.alumno'])->findOrFail($id);
        $condiciones = Condicion::all();
        $alumnos = TutorAlumno::with('alumno')->get();
        return view('informes_diarios.edit', compact('informeDiario', 'condiciones', 'alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_condicion' => 'required|integer',
            'id_alumno' => 'required|integer',
            'fecha' => 'required|date'
        ]);

        $informeDiario = InformeDiario::findOrFail($id);
        $informeDiario->update($request->all());

        return redirect()->route('informes_diarios.index')
            ->with('success', 'Informe Diario actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informeDiario = InformeDiario::findOrFail($id);
        $informeDiario->delete();

        return redirect()->route('informes_diarios.index')
            ->with('success', 'Informe Diario eliminado correctamente.');
    }
}
