<?php

namespace App\Http\Controllers;

use App\Models\Observacion;
use App\Models\TutorAlumno;
use App\Models\Clase;
use Illuminate\Http\Request;

class ObservacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $observaciones = Observacion::with(['alumno.alumno', 'clase.sala'])->get();
        return view('observaciones.index', compact('observaciones'));
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
        return view('observaciones.create', compact('alumnos', 'clases'));
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
            'observaciones' => 'required|string',
            'fecha' => 'required|date'
        ]);

        Observacion::create($request->all());

        return redirect()->route('observaciones.index')
            ->with('success', 'Observación creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $observacion = Observacion::with(['alumno.alumno', 'clase.sala'])->findOrFail($id);
        return view('observaciones.show', compact('observacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $observacion = Observacion::with(['alumno.alumno', 'clase.sala'])->findOrFail($id);
        $alumnos = TutorAlumno::with('alumno')->get();
        $clases = Clase::all();
        return view('observaciones.edit', compact('observacion', 'alumnos', 'clases'));
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
            'observaciones' => 'required|string',
            'fecha' => 'required|date'
        ]);

        $observacion = Observacion::findOrFail($id);
        $observacion->update($request->all());

        return redirect()->route('observaciones.index')
            ->with('success', 'Observación actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $observacion = Observacion::findOrFail($id);
        $observacion->delete();

        return redirect()->route('observaciones.index')
            ->with('success', 'Observación eliminada correctamente.');
    }
}
