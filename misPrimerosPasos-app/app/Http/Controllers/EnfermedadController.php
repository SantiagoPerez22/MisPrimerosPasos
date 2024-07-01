<?php

namespace App\Http\Controllers;

use App\Models\Enfermedad;
use App\Models\TutorAlumno;
use Illuminate\Http\Request;

class EnfermedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfermedades = Enfermedad::all();
        return view('enfermedades.index', compact('enfermedades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = TutorAlumno::all();
        return view('enfermedades.create', compact('alumnos'));
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
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'id_alumno' => 'required|integer|exists:tutor_alumno,id'
        ]);

        Enfermedad::create($request->all());

        return redirect()->route('enfermedades.index')
            ->with('success', 'Enfermedad creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enfermedad = Enfermedad::find($id);
        return view('enfermedades.show', compact('enfermedad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enfermedad = Enfermedad::find($id);
        $alumnos = TutorAlumno::all();
        return view('enfermedades.edit', compact('enfermedad', 'alumnos'));
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
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'id_alumno' => 'required|integer|exists:tutor_alumno,id'
        ]);

        $enfermedad = Enfermedad::find($id);
        $enfermedad->update($request->all());

        return redirect()->route('enfermedades.index')
            ->with('success', 'Enfermedad actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enfermedad = Enfermedad::find($id);
        if ($enfermedad) {
            $enfermedad->delete();
        } else {
            return redirect()->route('enfermedades.index')
                ->with('error', 'Enfermedad no encontrada.');
        }

        return redirect()->route('enfermedades.index')
            ->with('success', 'Enfermedad eliminada correctamente.');
    }
}
