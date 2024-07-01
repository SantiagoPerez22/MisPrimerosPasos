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
        $informesSemanales = InformeSemanal::all();
        return view('informes_semanales.index', compact('informesSemanales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = TutorAlumno::all();
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
    public function show(InformeSemanal $informeSemanal)
    {
        return view('informes_semanales.show', compact('informeSemanal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(InformeSemanal $informeSemanal)
    {
        $alumnos = TutorAlumno::all();
        return view('informes_semanales.edit', compact('informeSemanal', 'alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InformeSemanal $informeSemanal)
    {
        $request->validate([
            'id_alumno' => 'required|integer|exists:tutor_alumno,id',
            'altura' => 'required|numeric',
            'peso' => 'required|numeric',
            'fecha' => 'required|date'
        ]);

        $informeSemanal->update($request->all());

        return redirect()->route('informes_semanales.index')
            ->with('success', 'Informe semanal actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InformeSemanal $informeSemanal)
    {
        $informeSemanal->delete();

        return redirect()->route('informes_semanales.index')
            ->with('success', 'Informe semanal eliminado correctamente.');
    }
}
