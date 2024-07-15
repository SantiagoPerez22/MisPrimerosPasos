<?php

namespace App\Http\Controllers;

use App\Models\TutorAlumno;
use App\Models\Persona;
use App\Models\Nivel;
use Illuminate\Http\Request;

class TutorAlumnoController extends Controller
{
    public function index()
    {
        $tutoresAlumnos = TutorAlumno::all();
        return view('tutor_alumno.index', compact('tutoresAlumnos'));
    }

    public function create()
    {
        $alumnos = Persona::all(); // Assuming Persona model represents students
        $tutores = Persona::all(); // Assuming Persona model also represents tutors
        $niveles = Nivel::all();
        return view('tutor_alumno.create', compact('alumnos', 'tutores', 'niveles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_alumno' => 'required',
            'id_tutor1' => 'required',
            'id_tutor2' => 'nullable',
            'id_nivel' => 'required',
            'fecha_matricula' => 'required|date',
        ]);

        TutorAlumno::create($request->all());

        return redirect()->route('tutor_alumno.index')
            ->with('success', 'Relación tutor-alumno creada exitosamente.');
    }

    public function show(TutorAlumno $tutorAlumno)
    {
        return view('tutor_alumno.show', compact('tutorAlumno'));
    }

    public function edit(TutorAlumno $tutorAlumno)
    {
        $alumnos = Persona::all(); // Assuming Persona model represents students
        $tutores = Persona::all(); // Assuming Persona model also represents tutors
        $niveles = Nivel::all();
        return view('tutor_alumno.edit', compact('tutorAlumno', 'alumnos', 'tutores', 'niveles'));
    }

    public function update(Request $request, TutorAlumno $tutorAlumno)
    {
        $request->validate([
            'id_alumno' => 'required',
            'id_tutor1' => 'required',
            'id_tutor2' => 'nullable',
            'id_nivel' => 'required',
            'fecha_matricula' => 'required|date',
        ]);

        $tutorAlumno->update($request->all());

        return redirect()->route('tutor_alumno.index')
            ->with('success', 'Relación tutor-alumno actualizada exitosamente.');
    }

    public function destroy(TutorAlumno $tutorAlumno)
    {
        $tutorAlumno->delete();

        return redirect()->route('tutor_alumno.index')
            ->with('success', 'Relación tutor-alumno eliminada exitosamente.');
    }
}
