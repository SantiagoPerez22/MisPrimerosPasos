<?php

namespace App\Http\Controllers;

use App\Models\TutorAlumno;
use App\Models\Persona;
use App\Models\Nivel;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TutorAlumnoController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view tutor_alumno|create tutor_alumno|edit tutor_alumno|delete tutor_alumno', ['only' => ['index','show']]);
        $this->middleware('permission:create tutor_alumno', ['only' => ['create','store']]);
        $this->middleware('permission:edit tutor_alumno', ['only' => ['edit','update']]);
        $this->middleware('permission:delete tutor_alumno', ['only' => ['destroy']]);
    }

    public function index()
    {
        $tutoresAlumnos = TutorAlumno::all();
        return view('tutor_alumno.index', compact('tutoresAlumnos'));
    }

    public function create()
    {
        $fechaActual = Carbon::now();
        $alumnos = Persona::where('fecha_nacimiento', '>=', $fechaActual->copy()->subYears(4))
            ->where('fecha_nacimiento', '<=', $fechaActual->copy()->subDays(85))
            ->whereDoesntHave('tutorAlumno')
            ->get();
        $tutores = Persona::where('fecha_nacimiento', '<=', $fechaActual->copy()->subYears(14))
            ->get();
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
        $fechaActual = Carbon::now();
        $alumnos = Persona::where('fecha_nacimiento', '>=', $fechaActual->copy()->subYears(4))
            ->where('fecha_nacimiento', '<=', $fechaActual->copy()->subDays(85))
            ->whereDoesntHave('tutorAlumno', function($query) use ($tutorAlumno) {
                $query->where('id', '<>', $tutorAlumno->id);
            })
            ->get();
        $tutores = Persona::where('fecha_nacimiento', '<=', $fechaActual->copy()->subYears(14))
            ->get();
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
