<?php

namespace App\Http\Controllers;

use App\Models\InformeSemanal;
use App\Models\TutorAlumno;
use Illuminate\Http\Request;

class InformeSemanalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informesSemanales = InformeSemanal::with(['alumno.alumno'])->get();
        return view('informes_semanales.index', compact('informesSemanales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = TutorAlumno::with('alumno')->get();
        return view('informes_semanales.create', compact('alumnos'));
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
            'id_alumno' => 'required|integer|exists:tutor_alumno,id',
            'altura' => 'required|numeric',
            'peso' => 'required|numeric',
            'fecha' => 'required|date'
        ]);

        InformeSemanal::create($request->all());

        return redirect()->route('informes_semanales.index')
            ->with('success', 'Informe semanal creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $informeSemanal = InformeSemanal::with(['alumno.alumno'])->findOrFail($id);
        return view('informes_semanales.show', compact('informeSemanal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informeSemanal = InformeSemanal::with(['alumno.alumno'])->findOrFail($id);
        $alumnos = TutorAlumno::with('alumno')->get();
        return view('informes_semanales.edit', compact('informeSemanal', 'alumnos'));
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
            'altura' => 'required|numeric',
            'peso' => 'required|numeric',
            'fecha' => 'required|date'
        ]);

        $informeSemanal = InformeSemanal::findOrFail($id);
        $informeSemanal->update($request->all());

        return redirect()->route('informes_semanales.index')
            ->with('success', 'Informe Semanal actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informeSemanal = InformeSemanal::findOrFail($id);
        $informeSemanal->delete();

        return redirect()->route('informes_semanales.index')
            ->with('success', 'Informe Semanal eliminado correctamente.');
    }
}
