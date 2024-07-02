<?php

namespace App\Http\Controllers;

use App\Models\TutorAlumno;
use App\Models\Persona;
use App\Models\Nivel;
use Illuminate\Http\Request;

class TutorAlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutorAlumnos = TutorAlumno::with('alumno', 'tutor1', 'tutor2', 'nivel')->get();
        return view('tutor_alumnos.index', compact('tutorAlumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = Persona::all();
        $niveles = Nivel::all();
        return view('tutor_alumnos.create', compact('personas', 'niveles'));
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
            'id_alumno' => 'required|integer|exists:personas,id',
            'id_tutor1' => 'required|integer|exists:personas,id',
            'id_tutor2' => 'nullable|integer|exists:personas,id',
            'id_nivel' => 'required|integer|exists:nivel,id',
            'fecha_matricula' => 'required|date'
        ]);

        TutorAlumno::create($request->all());

        return redirect()->route('tutor_alumnos.index')
            ->with('success', 'Tutor Alumno creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TutorAlumno $tutorAlumno)
    {
        return view('tutor_alumnos.show', compact('tutorAlumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TutorAlumno $tutorAlumno)
    {
        $personas = Persona::all();
        $niveles = Nivel::all();
        return view('tutor_alumnos.edit', compact('tutorAlumno', 'personas', 'niveles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TutorAlumno $tutorAlumno)
    {
        $request->validate([
            'id_alumno' => 'required|integer|exists:personas,id',
            'id_tutor1' => 'required|integer|exists:personas,id',
            'id_tutor2' => 'nullable|integer|exists:personas,id',
            'id_nivel' => 'required|integer|exists:nivel,id',
            'fecha_matricula' => 'required|date'
        ]);

        $tutorAlumno->update($request->all());

        return redirect()->route('tutor_alumnos.index')
            ->with('success', 'Tutor Alumno actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutorAlumno = TutorAlumno::find($id);
        if ($tutorAlumno) {
            $tutorAlumno->delete();
        } else {
            return redirect()->route('tutor_alumnos.index')
                ->with('error', 'Tutor Alumno no encontrado.');
        }

        return redirect()->route('tutor_alumnos.index')
            ->with('success', 'Tutor Alumno eliminado correctamente.');
    }
}
