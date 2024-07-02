<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\TutorAlumno;
use App\Models\Clase;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencias = Asistencia::with(['alumno.alumno', 'clase.sala'])->get();
        return view('asistencias.index', compact('asistencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = TutorAlumno::with('alumno')->get();
        $clases = Clase::all();
        return view('asistencias.create', compact('alumnos', 'clases'));
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
            'id_alumno' => 'required|integer',
            'id_clase' => 'required|integer',
            'asistencia' => 'required|in:si,no',
            'fecha' => 'required|date'
        ]);

        Asistencia::create($request->all());

        return redirect()->route('asistencias.index')
            ->with('success', 'Asistencia creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asistencia = Asistencia::with(['alumno.alumno', 'clase.sala'])->findOrFail($id);
        return view('asistencias.show', compact('asistencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asistencia = Asistencia::with(['alumno.alumno', 'clase.sala'])->findOrFail($id);
        $alumnos = TutorAlumno::with('alumno')->get();
        $clases = Clase::all();
        return view('asistencias.edit', compact('asistencia', 'alumnos', 'clases'));
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
            'id_alumno' => 'required|integer',
            'id_clase' => 'required|integer',
            'asistencia' => 'required|in:si,no',
            'fecha' => 'required|date'
        ]);

        $asistencia = Asistencia::findOrFail($id);
        $asistencia->update($request->all());

        return redirect()->route('asistencias.index')
            ->with('success', 'Asistencia actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asistencia = Asistencia::findOrFail($id);
        $asistencia->delete();

        return redirect()->route('asistencias.index')
            ->with('success', 'Asistencia eliminada correctamente.');
    }
}
